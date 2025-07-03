import { Link } from "wouter";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { CheckCircle, ArrowRight, Shirt, Coffee, Users, Award } from "lucide-react";

export default function Textilveredelung() {
  const services = [
    {
      icon: Shirt,
      title: "T-Shirt-Druck",
      description: "Hochwertige Bedruckung von T-Shirts, Hoodies und anderen Textilien"
    },
    {
      icon: Award,
      title: "Besticken",
      description: "Professionelle Stickereien für langlebige und edle Veredelungen"
    },
    {
      icon: Coffee,
      title: "Becher & Tassen",
      description: "Individuelle Bedruckung von Tassen, Bechern und Thermoskannen"
    },
    {
      icon: Users,
      title: "Arbeitskleidung",
      description: "Firmenkleidung mit Logo und Beschriftung für ein professionelles Auftreten"
    }
  ];

  const techniques = [
    "Siebdruck",
    "Digitaldruck",
    "Flexdruck",
    "Flockdruck",
    "Transferdruck",
    "Sublimationsdruck"
  ];

  const materials = [
    "Baumwolle",
    "Polyester", 
    "Mischgewebe",
    "Funktionsmaterialien",
    "Bio-Textilien",
    "Workwear"
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-purple-600 to-purple-800 text-white py-20">
        <div className="absolute inset-0 bg-black opacity-40"></div>
        <div 
          className="absolute inset-0"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=1920&h=1080')",
            backgroundSize: "cover",
            backgroundPosition: "center"
          }}
        ></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold mb-6">Textilveredelung</h1>
            <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
              Von T-Shirt-Druck bis Bestickung - modernste Technik für höchste Qualität
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
                Professionelle Textilveredelung
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                Unsere Textilveredelung umfasst verschiedene Druckverfahren und Techniken, 
                um Ihre Textilien individuell und hochwertig zu gestalten. Von einzelnen 
                T-Shirts bis zu großen Firmenausstattungen - wir finden für jeden Bedarf 
                die optimale Lösung.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Mit modernster Ausrüstung und jahrelanger Erfahrung garantieren wir 
                langlebige Ergebnisse, die auch nach vielen Wäschen ihre Brillanz behalten.
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                  <h4 className="font-semibold text-dark mb-3">Druckverfahren:</h4>
                  {techniques.map((technique) => (
                    <div key={technique} className="flex items-center mb-2">
                      <CheckCircle className="h-4 w-4 text-purple-600 mr-2 flex-shrink-0" />
                      <span className="text-gray-700 text-sm">{technique}</span>
                    </div>
                  ))}
                </div>
                <div>
                  <h4 className="font-semibold text-dark mb-3">Materialien:</h4>
                  {materials.map((material) => (
                    <div key={material} className="flex items-center mb-2">
                      <CheckCircle className="h-4 w-4 text-purple-600 mr-2 flex-shrink-0" />
                      <span className="text-gray-700 text-sm">{material}</span>
                    </div>
                  ))}
                </div>
              </div>

              <Link href="/kontakt">
                <Button className="bg-purple-600 hover:bg-purple-700 text-white">
                  Beratungstermin vereinbaren
                  <ArrowRight className="ml-2 h-4 w-4" />
                </Button>
              </Link>
            </div>
            
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=800&h=600" 
                alt="Textilveredelung Maschine" 
                className="rounded-xl shadow-lg w-full"
              />
            </div>
          </div>

          {/* Services Grid */}
          <div className="mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Unsere Textilveredelungs-Leistungen
            </h3>
            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              {services.map((service) => (
                <Card key={service.title} className="text-center hover:shadow-lg transition-shadow">
                  <CardHeader>
                    <service.icon className="h-12 w-12 text-purple-600 mx-auto mb-3" />
                    <CardTitle className="text-lg">{service.title}</CardTitle>
                  </CardHeader>
                  <CardContent>
                    <p className="text-gray-600">{service.description}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>

          {/* Quality Features */}
          <div className="bg-neutral rounded-xl p-8 mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Qualität, die überzeugt
            </h3>
            <div className="grid md:grid-cols-3 gap-8">
              <div className="text-center">
                <div className="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <Award className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Langlebigkeit</h4>
                <p className="text-gray-600">Waschbeständige Veredelungen, die auch nach Jahren noch brillant aussehen</p>
              </div>
              <div className="text-center">
                <div className="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <CheckCircle className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Präzision</h4>
                <p className="text-gray-600">Millimetergenaue Platzierung und perfekte Farbwiedergabe</p>
              </div>
              <div className="text-center">
                <div className="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <Users className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Flexibilität</h4>
                <p className="text-gray-600">Von Einzelstücken bis zu Großauflagen - alles aus einer Hand</p>
              </div>
            </div>
          </div>

          {/* CTA Section */}
          <div className="bg-purple-600/10 rounded-xl p-8 text-center">
            <h3 className="text-2xl font-bold text-dark mb-4">
              Ihre Textilien - Ihre Botschaft
            </h3>
            <p className="text-lg text-gray-600 mb-6">
              Verwandeln Sie einfache Textilien in professionelle Werbebotschafter oder individuelle Lieblingsstücke!
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Link href="/kontakt">
                <Button size="lg" className="bg-purple-600 hover:bg-purple-700 text-white">
                  Kostenloses Angebot erhalten
                </Button>
              </Link>
              <Button size="lg" variant="outline" className="text-purple-600 border-purple-600 hover:bg-purple-600 hover:text-white">
                Materialberatung
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
