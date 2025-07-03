import type { Express } from "express";
import { createServer, type Server } from "http";
import { storage } from "./storage";
import { insertContactSubmissionSchema } from "@shared/schema";
import { z } from "zod";

export async function registerRoutes(app: Express): Promise<Server> {
  
  // Contact form submission endpoint
  app.post("/api/contact", async (req, res) => {
    try {
      const validatedData = insertContactSubmissionSchema.parse(req.body);
      const submission = await storage.createContactSubmission(validatedData);
      
      // In a real implementation, you would send an email here
      console.log("New contact submission:", submission);
      
      res.json({ 
        success: true, 
        message: "Vielen Dank für Ihre Anfrage! Wir werden uns bald bei Ihnen melden." 
      });
    } catch (error) {
      if (error instanceof z.ZodError) {
        res.status(400).json({ 
          success: false, 
          message: "Bitte überprüfen Sie Ihre Eingaben.",
          errors: error.errors 
        });
      } else {
        res.status(500).json({ 
          success: false, 
          message: "Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut." 
        });
      }
    }
  });

  // Get all contact submissions (admin endpoint)
  app.get("/api/contact-submissions", async (req, res) => {
    try {
      const submissions = await storage.getContactSubmissions();
      res.json(submissions);
    } catch (error) {
      res.status(500).json({ 
        success: false, 
        message: "Fehler beim Laden der Anfragen." 
      });
    }
  });

  const httpServer = createServer(app);
  return httpServer;
}
