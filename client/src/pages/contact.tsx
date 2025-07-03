import { useState } from "react";
import { useMutation } from "@tanstack/react-query";
import { useForm } from "react-hook-form";
import { zodResolver } from "@hookform/resolvers/zod";
import { z } from "zod";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Form, FormControl, FormField, FormItem, FormLabel, FormMessage } from "@/components/ui/form";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Checkbox } from "@/components/ui/checkbox";
import { useToast } from "@/hooks/use-toast";
import { MapPin, Phone, Mail, Clock } from "lucide-react";
import { apiRequest } from "@/lib/queryClient";

const formSchema = z.object({
  firstName: z.string().min(2, "Vorname muss mindestens 2 Zeichen lang sein"),
  lastName: z.string().min(2, "Nachname muss mindestens 2 Zeichen lang sein"),
  email: z.string().email("Bitte geben Sie eine gültige E-Mail-Adresse ein"),
  phone: z.string().optional(),
  service: z.string().optional(),
  message: z.string().min(10, "Die Nachricht muss mindestens 10 Zeichen lang sein"),
  privacyAccepted: z.boolean().refine(val => val === true, "Sie müssen der Datenschutzerklärung zustimmen")
});

type FormData = z.infer<typeof formSchema>;

export default function Contact() {
  const { toast } = useToast();

  const form = useForm<FormData>({
    resolver: zodResolver(formSchema),
    defaultValues: {
      firstName: "",
      lastName: "",
      email: "",
      phone: "",
      service: "",
      message: "",
      privacyAccepted: false,
    },
  });

  const submitContactForm = useMutation({
    mutationFn: (data: FormData) => apiRequest("POST", "/api/contact", data),
    onSuccess: () => {
      toast({
        title: "Anfrage gesendet!",
        description: "Vielen Dank für Ihre Anfrage. Wir werden uns bald bei Ihnen melden.",
      });
      form.reset();
    },
    onError: (error: any) => {
      toast({
        title: "Fehler beim Senden",
        description: error.message || "Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.",
        variant: "destructive",
      });
    },
  });

  const onSubmit = (data: FormData) => {
    submitContactForm.mutate(data);
  };

  return (
    <div className="min-h-screen py-20 bg-neutral">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h1 className="text-4xl md:text-5xl font-bold text-dark mb-6">Kontakt</h1>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Haben Sie ein Projekt oder Fragen zu unseren Leistungen? Kontaktieren Sie uns für ein 
            individuelles Angebot oder vereinbaren Sie einen persönlichen Beratungstermin.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-12">
          {/* Contact Information */}
          <div className="space-y-8">
            <Card>
              <CardHeader>
                <CardTitle className="text-2xl text-dark">Kontaktinformationen</CardTitle>
              </CardHeader>
              <CardContent className="space-y-6">
                <div className="flex items-start">
                  <div className="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <MapPin className="h-6 w-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-lg font-semibold text-dark mb-1">Adresse</h3>
                    <p className="text-gray-600">
                      Musterstraße 123<br />
                      12345 Oberberg<br />
                      Deutschland
                    </p>
                  </div>
                </div>
                
                <div className="flex items-start">
                  <div className="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <Phone className="h-6 w-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-lg font-semibold text-dark mb-1">Telefon</h3>
                    <p className="text-gray-600">+49 (0) 123 456789</p>
                  </div>
                </div>
                
                <div className="flex items-start">
                  <div className="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <Mail className="h-6 w-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-lg font-semibold text-dark mb-1">E-Mail</h3>
                    <p className="text-gray-600">info@werbedruck-gm.de</p>
                  </div>
                </div>

                <div className="flex items-start">
                  <div className="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                    <Clock className="h-6 w-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-lg font-semibold text-dark mb-1">Öffnungszeiten</h3>
                    <div className="text-gray-600">
                      <p>Montag - Freitag: 08:00 - 17:00</p>
                      <p>Samstag: Nach Vereinbarung</p>
                      <p>Sonntag: Geschlossen</p>
                    </div>
                  </div>
                </div>
              </CardContent>
            </Card>

            {/* Quick Contact Options */}
            <Card>
              <CardHeader>
                <CardTitle className="text-xl text-dark">Schnell-Kontakt</CardTitle>
              </CardHeader>
              <CardContent className="space-y-4">
                <Button 
                  className="w-full justify-start bg-primary hover:bg-blue-700 text-white"
                  onClick={() => window.open('tel:+491234567890')}
                >
                  <Phone className="mr-2 h-4 w-4" />
                  Jetzt anrufen
                </Button>
                <Button 
                  variant="outline" 
                  className="w-full justify-start text-primary border-primary hover:bg-primary hover:text-white"
                  onClick={() => window.open('mailto:info@werbedruck-gm.de')}
                >
                  <Mail className="mr-2 h-4 w-4" />
                  E-Mail senden
                </Button>
              </CardContent>
            </Card>
          </div>
          
          {/* Contact Form */}
          <Card>
            <CardHeader>
              <CardTitle className="text-2xl text-dark">Anfrage senden</CardTitle>
            </CardHeader>
            <CardContent>
              <Form {...form}>
                <form onSubmit={form.handleSubmit(onSubmit)} className="space-y-6">
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <FormField
                      control={form.control}
                      name="firstName"
                      render={({ field }) => (
                        <FormItem>
                          <FormLabel>Vorname</FormLabel>
                          <FormControl>
                            <Input placeholder="Ihr Vorname" {...field} />
                          </FormControl>
                          <FormMessage />
                        </FormItem>
                      )}
                    />
                    <FormField
                      control={form.control}
                      name="lastName"
                      render={({ field }) => (
                        <FormItem>
                          <FormLabel>Nachname</FormLabel>
                          <FormControl>
                            <Input placeholder="Ihr Nachname" {...field} />
                          </FormControl>
                          <FormMessage />
                        </FormItem>
                      )}
                    />
                  </div>
                  
                  <FormField
                    control={form.control}
                    name="email"
                    render={({ field }) => (
                      <FormItem>
                        <FormLabel>E-Mail-Adresse</FormLabel>
                        <FormControl>
                          <Input type="email" placeholder="ihre.email@beispiel.de" {...field} />
                        </FormControl>
                        <FormMessage />
                      </FormItem>
                    )}
                  />
                  
                  <FormField
                    control={form.control}
                    name="phone"
                    render={({ field }) => (
                      <FormItem>
                        <FormLabel>Telefon (optional)</FormLabel>
                        <FormControl>
                          <Input type="tel" placeholder="+49 123 456789" {...field} />
                        </FormControl>
                        <FormMessage />
                      </FormItem>
                    )}
                  />
                  
                  <FormField
                    control={form.control}
                    name="service"
                    render={({ field }) => (
                      <FormItem>
                        <FormLabel>Gewünschte Leistung</FormLabel>
                        <Select onValueChange={field.onChange} defaultValue={field.value}>
                          <FormControl>
                            <SelectTrigger>
                              <SelectValue placeholder="Bitte wählen..." />
                            </SelectTrigger>
                          </FormControl>
                          <SelectContent>
                            <SelectItem value="digitaldruck">Digitaldruck</SelectItem>
                            <SelectItem value="foliendesign">Foliendesign</SelectItem>
                            <SelectItem value="textilveredelung">Textilveredelung</SelectItem>
                            <SelectItem value="lasergravuren">Lasergravuren</SelectItem>
                            <SelectItem value="beratung">Allgemeine Beratung</SelectItem>
                          </SelectContent>
                        </Select>
                        <FormMessage />
                      </FormItem>
                    )}
                  />
                  
                  <FormField
                    control={form.control}
                    name="message"
                    render={({ field }) => (
                      <FormItem>
                        <FormLabel>Nachricht</FormLabel>
                        <FormControl>
                          <Textarea 
                            placeholder="Beschreiben Sie Ihr Projekt oder Ihre Anfrage..." 
                            className="min-h-[120px]"
                            {...field} 
                          />
                        </FormControl>
                        <FormMessage />
                      </FormItem>
                    )}
                  />
                  
                  <FormField
                    control={form.control}
                    name="privacyAccepted"
                    render={({ field }) => (
                      <FormItem className="flex flex-row items-start space-x-3 space-y-0">
                        <FormControl>
                          <Checkbox
                            checked={field.value}
                            onCheckedChange={field.onChange}
                          />
                        </FormControl>
                        <div className="space-y-1 leading-none">
                          <FormLabel className="text-sm">
                            Ich stimme der{" "}
                            <a href="/datenschutz" className="text-primary hover:text-blue-700 underline">
                              Datenschutzerklärung
                            </a>{" "}
                            zu.
                          </FormLabel>
                          <FormMessage />
                        </div>
                      </FormItem>
                    )}
                  />
                  
                  <Button 
                    type="submit" 
                    className="w-full bg-primary hover:bg-blue-700 text-white"
                    disabled={submitContactForm.isPending}
                  >
                    {submitContactForm.isPending ? "Wird gesendet..." : "Anfrage senden"}
                  </Button>
                </form>
              </Form>
            </CardContent>
          </Card>
        </div>
      </div>
    </div>
  );
}
