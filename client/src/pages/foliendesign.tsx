import { Link } from "wouter";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { CheckCircle, ArrowRight, Car, Store, Palette, Scissors } from "lucide-react";

export default function Foliendesign() {
  const services = [
    {
      icon: Car,
      title: "Fahrzeugbeschriftung",
      description: "Vollverklebungen, Teilverklebungen und Werbebeschriftungen für alle Fahrzeugtypen"
    },
    {
      icon: Store,
      title: "Schaufensterwerbung",
      description: "Professionelle Schaufenstergestaltung mit hochwertigen Folien und Designs"
    },
    {
      icon: Palette,
      title: "Designfolien",
      description: "Individuelle Designlösungen für Innen- und Außenanwendungen"
    },
    {
      icon: Scissors,
      title: "Plotterfolien",
      description: "Präzise geschnittene Folien für Beschriftungen und grafische Elemente"
    }
  ];

  const materials = [
    "3M Qualitätsfolien",
    "Avery Dennison Folien",
    "Oracal Plotterfolien",
    "Reflektierende Folien",
    "Strukturfolien",
    "Magnetfolien"
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-secondary to-green-700 text-white py-20">
        <div className="absolute inset-0 bg-black opacity-40"></div>
        <div 
          className="absolute inset-0"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=1920&h=1080')",
            backgroundSize: "cover",
            backgroundPosition: "center"
          }}
        ></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold mb-6">Foliendesign</h1>
            <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
              Professionelle Folienverarbeitung für Fahrzeuge, Schaufenster und individuelle Designs
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
                Kreatives Foliendesign
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                Unser Foliendesign-Service umfasst die komplette Gestaltung und Umsetzung von 
                Werbebotschaften auf verschiedensten Folienarten. Von der ersten Idee bis zur 
                finalen Montage begleiten wir Sie durch den gesamten Prozess.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Mit modernster Plotter-Technologie und hochwertigen Markenfolien entstehen 
                langlebige und professionelle Werbebotschaften, die Ihre Marke optimal präsentieren.
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                {materials.map((material) => (
                  <div key={material} className="flex items-center">
                    <CheckCircle className="h-5 w-5 text-secondary mr-3 flex-shrink-0" />
                    <span className="text-gray-700">{material}</span>
                  </div>
                ))}
              </div>

              <Link href="/kontakt">
                <Button className="bg-secondary hover:bg-green-700 text-white">
                  Beratungstermin vereinbaren
                  <ArrowRight className="ml-2 h-4 w-4" />
                </Button>
              </Link>
            </div>
            
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=800&h=600" 
                alt="Foliendesign Arbeitsplatz" 
                className="rounded-xl shadow-lg w-full"
              />
            </div>
          </div>

          {/* Services Grid */}
          <div className="mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Unsere Foliendesign-Leistungen
            </h3>
            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              {services.map((service) => (
                <Card key={service.title} className="text-center hover:shadow-lg transition-shadow">
                  <CardHeader>
                    <service.icon className="h-12 w-12 text-secondary mx-auto mb-3" />
                    <CardTitle className="text-lg">{service.title}</CardTitle>
                  </CardHeader>
                  <CardContent>
                    <p className="text-gray-600">{service.description}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>

          {/* Process Section */}
          <div className="bg-neutral rounded-xl p-8 mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Unser Arbeitsprozess
            </h3>
            <div className="grid md:grid-cols-4 gap-6">
              <div className="text-center">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-4">1</div>
                <h4 className="font-semibold text-dark mb-2">Beratung</h4>
                <p className="text-gray-600 text-sm">Analyse Ihrer Anforderungen und Designberatung</p>
              </div>
              <div className="text-center">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-4">2</div>
                <h4 className="font-semibold text-dark mb-2">Design</h4>
                <p className="text-gray-600 text-sm">Erstellung individueller Designvorschläge</p>
              </div>
              <div className="text-center">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-4">3</div>
                <h4 className="font-semibold text-dark mb-2">Produktion</h4>
                <p className="text-gray-600 text-sm">Präzise Folienbearbeitung mit Profi-Equipment</p>
              </div>
              <div className="text-center">
                <div className="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-bold text-lg mx-auto mb-4">4</div>
                <h4 className="font-semibold text-dark mb-2">Montage</h4>
                <p className="text-gray-600 text-sm">Professionelle Applikation vor Ort</p>
              </div>
            </div>
          </div>

          {/* CTA Section */}
          <div className="bg-secondary/10 rounded-xl p-8 text-center">
            <h3 className="text-2xl font-bold text-dark mb-4">
              Lassen Sie Ihre Ideen Wirklichkeit werden
            </h3>
            <p className="text-lg text-gray-600 mb-6">
              Von der ersten Skizze bis zur fertigen Folierung - wir setzen Ihre Werbevision um!
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Link href="/kontakt">
                <Button size="lg" className="bg-secondary hover:bg-green-700 text-white">
                  Kostenloses Angebot erhalten
                </Button>
              </Link>
              <Button size="lg" variant="outline" className="text-secondary border-secondary hover:bg-secondary hover:text-white">
                Portfolio ansehen
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
