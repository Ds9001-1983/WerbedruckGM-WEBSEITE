import { Link } from "wouter";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Award, Users, Clock, Star, Target, Heart } from "lucide-react";

export default function About() {
  const values = [
    {
      icon: Award,
      title: "Qualität",
      description: "Höchste Qualitätsstandards in allen Bereichen unserer Arbeit"
    },
    {
      icon: Users,
      title: "Kundenfokus",
      description: "Ihre Zufriedenheit steht im Mittelpunkt unseres Handelns"
    },
    {
      icon: Clock,
      title: "Zuverlässigkeit",
      description: "Pünktliche Lieferung und verlässliche Terminabsprachen"
    },
    {
      icon: Star,
      title: "Innovation",
      description: "Stetige Weiterbildung und Einsatz modernster Technologien"
    }
  ];

  const milestones = [
    {
      year: "2018",
      title: "Gründung",
      description: "Start als kleine Werbewerkstatt mit dem Fokus auf Digitaldruck"
    },
    {
      year: "2019",
      title: "Erweiterung",
      description: "Ausbau des Maschinenparks um Folienverarbeitung"
    },
    {
      year: "2020",
      title: "Textilveredelung",
      description: "Einstieg in professionelle Textilveredelung und Bestickung"
    },
    {
      year: "2021",
      title: "Lasertechnologie",
      description: "Integration moderner Lasergravur-Technologie"
    },
    {
      year: "2022",
      title: "Expansion",
      description: "Vergrößerung der Produktionsfläche und des Teams"
    },
    {
      year: "2024",
      title: "Rebranding",
      description: "Umbenennung zu Werbedruck GM mit erweitertem Leistungsspektrum"
    }
  ];

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-primary to-blue-800 text-white py-20">
        <div className="absolute inset-0 bg-black opacity-40"></div>
        <div 
          className="absolute inset-0"
          style={{
            backgroundImage: "url('https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=1920&h=1080')",
            backgroundSize: "cover",
            backgroundPosition: "center"
          }}
        ></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold mb-6">Über Werbedruck GM</h1>
            <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
              Qualität "MadeInOberberg" vom Meister - Ihre zuverlässige Werbewerkstatt seit 2018
            </p>
          </div>
        </div>
      </section>

      {/* Main Story */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-dark mb-6">
                Unsere Geschichte
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                Begonnen hat alles im Jahr 2018, mit dem stetigen Antrieb Werbetechnik 
                vom Kunden für den Kunden preisgünstig, qualitativ hochwertig ohne viel 
                Schnick-Schnack auch in Einzel- und Kleinauflagen umzusetzen.
              </p>
              <p className="text-lg text-gray-600 mb-6">
                Mit der Zeit können wir auf einen umfangreichen Maschinenpark zurückblicken 
                und haben uns ein sehr umfangreiches Portfolio an Know-How und Arbeitstechniken 
                angeeignet, egal ob Aufkleber, Banner, Besticken, Fotoleinwände T-Shirtdruck, 
                Becher-Tassendruck, Werbeschilder, Lasergravuren uvm.
              </p>
              <p className="text-lg text-gray-600 mb-8">
                Bei uns kommen moderne Hilfsmittel und Werkzeuge zum Einsatz. Durch stetige 
                Weiterbildung auf Fachmessen und Workshops versuchen wir für Sie immer ein 
                kleines bisschen besser und innovativer zu sein als unsere Mitbewerber.
              </p>
              
              <Link href="/kontakt">
                <Button className="bg-primary hover:bg-blue-700 text-white">
                  Persönlichen Termin vereinbaren
                </Button>
              </Link>
            </div>
            
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&h=600" 
                alt="Werbedruck GM Werkstatt" 
                className="rounded-xl shadow-lg w-full"
              />
            </div>
          </div>

          {/* Stats */}
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div className="text-center">
              <div className="text-4xl font-bold text-primary mb-2">2018</div>
              <div className="text-gray-600">Seit</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-primary mb-2">1000+</div>
              <div className="text-gray-600">Projekte</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-primary mb-2">4</div>
              <div className="text-gray-600">Hauptleistungen</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-primary mb-2">24h</div>
              <div className="text-gray-600">Express-Service</div>
            </div>
          </div>
        </div>
      </section>

      {/* Values */}
      <section className="py-20 bg-neutral">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-dark mb-4">Unsere Werte</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Diese Prinzipien leiten uns in allem, was wir tun - von der ersten Beratung 
              bis zur finalen Umsetzung Ihres Projekts.
            </p>
          </div>
          
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value) => (
              <Card key={value.title} className="text-center hover:shadow-lg transition-shadow">
                <CardHeader>
                  <value.icon className="h-12 w-12 text-primary mx-auto mb-3" />
                  <CardTitle className="text-xl">{value.title}</CardTitle>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-600">{value.description}</p>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Timeline */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-dark mb-4">
              Unsere Entwicklung
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Von der kleinen Werbewerkstatt zum professionellen Dienstleister - 
              ein Blick auf unsere wichtigsten Meilensteine.
            </p>
          </div>
          
          <div className="relative">
            {/* Timeline line */}
            <div className="absolute left-1/2 transform -translate-x-px h-full w-0.5 bg-primary"></div>
            
            <div className="space-y-12">
              {milestones.map((milestone, index) => (
                <div key={milestone.year} className={`relative flex items-center ${index % 2 === 0 ? 'justify-start' : 'justify-end'}`}>
                  {/* Timeline dot */}
                  <div className="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg z-10"></div>
                  
                  {/* Content */}
                  <div className={`w-5/12 ${index % 2 === 0 ? 'pr-8 text-right' : 'pl-8 text-left'}`}>
                    <Card className="hover:shadow-lg transition-shadow">
                      <CardHeader>
                        <div className="flex items-center justify-between">
                          <CardTitle className="text-xl text-dark">{milestone.title}</CardTitle>
                          <span className="text-2xl font-bold text-primary">{milestone.year}</span>
                        </div>
                      </CardHeader>
                      <CardContent>
                        <p className="text-gray-600">{milestone.description}</p>
                      </CardContent>
                    </Card>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Mission */}
      <section className="py-20 bg-primary text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <Target className="h-16 w-16 mx-auto mb-6" />
          <h2 className="text-3xl md:text-4xl font-bold mb-6">Unsere Mission</h2>
          <p className="text-xl mb-8 max-w-4xl mx-auto">
            Was können wir für Sie tun? Wir möchten Ihr zuverlässiger Partner für alle 
            Werbetechnik-Bedürfnisse sein. Von der ersten Idee bis zur finalen Umsetzung 
            begleiten wir Sie mit Fachwissen, Kreativität und handwerklicher Perfektion.
          </p>
          <Link href="/kontakt">
            <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-primary">
              Vereinbaren Sie doch gerne einen Termin für Ihr persönliches Werbeprojekt
            </Button>
          </Link>
        </div>
      </section>
    </div>
  );
}
