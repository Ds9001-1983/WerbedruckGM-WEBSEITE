import { Link } from "wouter";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { CheckCircle, ArrowRight } from "lucide-react";

export default function Digitaldruck() {
  const services = [
    "Aufkleber & Etiketten",
    "Banner & Fahnen",
    "Sichtschutzfolien",
    "Prüfplaketten",
    "Folienbeschriftungen",
    "Werbeschilder",
    "T-Shirt-Folien",
    "Großformatdrucke"
  ];

  const features = [
    "MIMAKI Großformatdrucker",
    "Flachbett UV-Drucker",
    "RollOver Laminatoren",
    "EMBLEM Verarbeitungsgeräte",
    "Schnelle Bearbeitung",
    "Kleine und große Auflagen"
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-primary to-blue-800 text-white py-20">
        <div className="absolute inset-0 bg-black opacity-40"></div>
        <div 
          className="absolute inset-0"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=1920&h=1080')",
            backgroundSize: "cover",
            backgroundPosition: "center"
          }}
        ></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold mb-6">Digitaldruck</h1>
            <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
              Professioneller Digitaldruck seit 2018 - schnell, günstig und kurzfristig
            </p>
            <Link href="/kontakt">
              <Button size="lg" className="bg-accent hover:bg-red-700 text-white">
                Jetzt Angebot anfordern
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Main Content */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-dark mb-6">
                Professioneller Digitaldruck
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                Seit 2018 beschäftigen wir uns mit dem Thema Digitaldruck und haben mehrere 
                Großformatdrucker und Flachbett UV-Drucker von MIMAKI sowie Laminatoren von 
                RollOver und EMBLEM im Einsatz.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Damit sind wir in der Lage Ihnen schnell, günstig und kurzfristig Aufkleber, 
                Folienbeschriftungen, Sichtschutzfolien, Banner, Schilder, Prüfplaketten, 
                T-Shirt-Folien und vieles mehr On Demand anzufertigen!
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                {features.map((feature) => (
                  <div key={feature} className="flex items-center">
                    <CheckCircle className="h-5 w-5 text-secondary mr-3 flex-shrink-0" />
                    <span className="text-gray-700">{feature}</span>
                  </div>
                ))}
              </div>

              <Link href="/kontakt">
                <Button className="bg-primary hover:bg-blue-700 text-white">
                  Beratungstermin vereinbaren
                  <ArrowRight className="ml-2 h-4 w-4" />
                </Button>
              </Link>
            </div>
            
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=800&h=600" 
                alt="Digitaldruck Maschine" 
                className="rounded-xl shadow-lg w-full"
              />
            </div>
          </div>

          {/* Services Grid */}
          <div className="mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Unsere Digitaldruck-Leistungen
            </h3>
            <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
              {services.map((service) => (
                <Card key={service} className="text-center hover:shadow-lg transition-shadow">
                  <CardContent className="p-6">
                    <CheckCircle className="h-8 w-8 text-secondary mx-auto mb-3" />
                    <p className="font-semibold text-dark">{service}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>

          {/* CTA Section */}
          <div className="bg-neutral rounded-xl p-8 text-center">
            <h3 className="text-2xl font-bold text-dark mb-4">
              Gerne erstellen wir Ihnen ein individuelles Angebot
            </h3>
            <p className="text-lg text-gray-600 mb-6">
              Beraten Sie mit unserem Know-How rund um Ihre Werbung!
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Link href="/kontakt">
                <Button size="lg" className="bg-primary hover:bg-blue-700 text-white">
                  Jetzt Angebot erhalten
                </Button>
              </Link>
              <Button size="lg" variant="outline" className="text-primary border-primary hover:bg-primary hover:text-white">
                +49 (0) 123 456789
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
