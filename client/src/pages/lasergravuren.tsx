import { Link } from "wouter";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { CheckCircle, ArrowRight, Zap, TreePine, Wrench, Gem } from "lucide-react";

export default function Lasergravuren() {
  const services = [
    {
      icon: TreePine,
      title: "Holzgravuren",
      description: "Präzise Gravuren in verschiedene Holzarten für dekorative und funktionale Zwecke"
    },
    {
      icon: Wrench,
      title: "Metallgravuren",
      description: "Dauerhafte Beschriftungen auf Aluminium, Edelstahl und anderen Metallen"
    },
    {
      icon: Gem,
      title: "Kunststoffgravuren",
      description: "Hochpräzise Gravuren in Acryl, Plexiglas und andere Kunststoffmaterialien"
    },
    {
      icon: Zap,
      title: "Personalisierung",
      description: "Individuelle Geschenke und Werbeartikel mit persönlichen Gravuren"
    }
  ];

  const materials = [
    "Holz (alle Arten)",
    "Aluminium", 
    "Edelstahl",
    "Acryl/Plexiglas",
    "Leder",
    "Glas",
    "Karton/Papier",
    "Textilien"
  ];

  const applications = [
    "Werbeschilder",
    "Namensschilder",
    "Industriebeschriftung",
    "Geschenkartikel",
    "Trophäen & Pokale",
    "Firmenschilder",
    "Kennzeichnung",
    "Prototyping"
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-orange-600 to-red-600 text-white py-20">
        <div className="absolute inset-0 bg-black opacity-40"></div>
        <div 
          className="absolute inset-0"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1920&h=1080')",
            backgroundSize: "cover",
            backgroundPosition: "center"
          }}
        ></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold mb-6">Lasergravuren</h1>
            <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
              Präzise Lasergravuren auf verschiedenste Materialien für individuelle und dauerhafte Beschriftungen
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
                Präzision trifft auf Kreativität
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                Unsere moderne Lasertechnologie ermöglicht es uns, feinste Details in verschiedenste 
                Materialien zu gravieren. Von Holz über Metall bis hin zu Kunststoff - wir schaffen 
                dauerhafte und präzise Beschriftungen und Designs.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Ob für industrielle Kennzeichnungen, personalisierte Geschenke oder dekorative 
                Elemente - mit unserer Lasergravur verwirklichen Sie auch komplexeste Designs 
                mit höchster Präzision.
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                  <h4 className="font-semibold text-dark mb-3">Materialien:</h4>
                  {materials.map((material) => (
                    <div key={material} className="flex items-center mb-2">
                      <CheckCircle className="h-4 w-4 text-orange-600 mr-2 flex-shrink-0" />
                      <span className="text-gray-700 text-sm">{material}</span>
                    </div>
                  ))}
                </div>
                <div>
                  <h4 className="font-semibold text-dark mb-3">Anwendungen:</h4>
                  {applications.map((application) => (
                    <div key={application} className="flex items-center mb-2">
                      <CheckCircle className="h-4 w-4 text-orange-600 mr-2 flex-shrink-0" />
                      <span className="text-gray-700 text-sm">{application}</span>
                    </div>
                  ))}
                </div>
              </div>

              <Link href="/kontakt">
                <Button className="bg-orange-600 hover:bg-orange-700 text-white">
                  Beratungstermin vereinbaren
                  <ArrowRight className="ml-2 h-4 w-4" />
                </Button>
              </Link>
            </div>
            
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&h=600" 
                alt="Lasergravur Maschine" 
                className="rounded-xl shadow-lg w-full"
              />
            </div>
          </div>

          {/* Services Grid */}
          <div className="mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Unsere Lasergravur-Leistungen
            </h3>
            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              {services.map((service) => (
                <Card key={service.title} className="text-center hover:shadow-lg transition-shadow">
                  <CardHeader>
                    <service.icon className="h-12 w-12 text-orange-600 mx-auto mb-3" />
                    <CardTitle className="text-lg">{service.title}</CardTitle>
                  </CardHeader>
                  <CardContent>
                    <p className="text-gray-600">{service.description}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>

          {/* Technology Section */}
          <div className="bg-neutral rounded-xl p-8 mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Modernste Lasertechnologie
            </h3>
            <div className="grid md:grid-cols-3 gap-8">
              <div className="text-center">
                <div className="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <Zap className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Hohe Präzision</h4>
                <p className="text-gray-600">Feinste Details bis 0,1mm Genauigkeit für perfekte Ergebnisse</p>
              </div>
              <div className="text-center">
                <div className="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <CheckCircle className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Vielseitigkeit</h4>
                <p className="text-gray-600">Bearbeitung verschiedenster Materialien in einem Arbeitsgang</p>
              </div>
              <div className="text-center">
                <div className="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                  <ArrowRight className="h-8 w-8 text-white" />
                </div>
                <h4 className="font-semibold text-dark mb-2">Schnelligkeit</h4>
                <p className="text-gray-600">Kurze Bearbeitungszeiten auch bei komplexen Designs</p>
              </div>
            </div>
          </div>

          {/* Examples Section */}
          <div className="mb-16">
            <h3 className="text-2xl font-bold text-dark mb-8 text-center">
              Anwendungsbeispiele
            </h3>
            <div className="grid md:grid-cols-3 gap-6">
              <div className="text-center">
                <img 
                  src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=400&h=300" 
                  alt="Holzgravur Beispiel" 
                  className="rounded-lg shadow-lg w-full h-48 object-cover mb-4"
                />
                <h4 className="font-semibold text-dark mb-2">Personalisierte Holzartikel</h4>
                <p className="text-gray-600">Individuelle Gravuren für Geschenke und Dekoration</p>
              </div>
              <div className="text-center">
                <img 
                  src="https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?auto=format&fit=crop&w=400&h=300" 
                  alt="Industrielle Kennzeichnung" 
                  className="rounded-lg shadow-lg w-full h-48 object-cover mb-4"
                />
                <h4 className="font-semibold text-dark mb-2">Industrielle Kennzeichnung</h4>
                <p className="text-gray-600">Dauerhafte Beschriftung für Maschinen und Bauteile</p>
              </div>
              <div className="text-center">
                <img 
                  src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?auto=format&fit=crop&w=400&h=300" 
                  alt="Acryl Werbeschilder" 
                  className="rounded-lg shadow-lg w-full h-48 object-cover mb-4"
                />
                <h4 className="font-semibold text-dark mb-2">Acryl-Werbeschilder</h4>
                <p className="text-gray-600">Hochwertige Schilder für professionelle Präsentation</p>
              </div>
            </div>
          </div>

          {/* CTA Section */}
          <div className="bg-orange-600/10 rounded-xl p-8 text-center">
            <h3 className="text-2xl font-bold text-dark mb-4">
              Ihre Idee - unsere Präzision
            </h3>
            <p className="text-lg text-gray-600 mb-6">
              Lassen Sie uns gemeinsam Ihre Vorstellungen in perfekte Lasergravuren umsetzen!
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Link href="/kontakt">
                <Button size="lg" className="bg-orange-600 hover:bg-orange-700 text-white">
                  Kostenloses Angebot erhalten
                </Button>
              </Link>
              <Button size="lg" variant="outline" className="text-orange-600 border-orange-600 hover:bg-orange-600 hover:text-white">
                Materialberatung
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
