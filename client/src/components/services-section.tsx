import { Link } from "wouter";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

const services = [
  {
    title: "Digitaldruck",
    href: "/digitaldruck",
    image: "https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=800&h=400",
    description: "Hochwertige Drucke auf verschiedensten Materialien. Von Aufklebern bis Banner - schnell und kostengünstig auch in Kleinauflagen.",
    features: ["Aufkleber & Folien", "Banner & Schilder", "Sichtschutzfolien", "Prüfplaketten"]
  },
  {
    title: "Foliendesign",
    href: "/foliendesign",
    image: "https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=800&h=400",
    description: "Professionelle Folienverarbeitung für Fahrzeugbeschriftung, Schaufenster und individuelle Designlösungen.",
    features: ["Fahrzeugbeschriftung", "Schaufensterwerbung", "Plotterfolien", "Designfolien"]
  },
  {
    title: "Textilveredelung",
    href: "/textilveredelung",
    image: "https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=800&h=400",
    description: "Von T-Shirt-Druck bis Bestickung - wir veredeln Ihre Textilien mit modernster Technik und höchster Qualität.",
    features: ["T-Shirt-Druck", "Besticken", "Becher-/Tassendruck", "Arbeitskleidung"]
  },
  {
    title: "Lasergravuren",
    href: "/lasergravuren",
    image: "https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&h=400",
    description: "Präzise Lasergravuren auf Holz, Metall, Kunststoff und anderen Materialien für individuelle und dauerhafte Beschriftungen.",
    features: ["Holzgravuren", "Metallgravuren", "Kunststoffgravuren", "Personalisierung"]
  }
];

export default function ServicesSection() {
  return (
    <section id="services" className="py-20 bg-neutral">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-dark mb-4">Unsere Leistungen</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Mit unserem umfangreichen Maschinenpark und jahrelanger Erfahrung bieten wir Ihnen 
            professionelle Werbetechnik für alle Ihre Bedürfnisse.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((service) => (
            <Card key={service.title} className="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div className="relative h-48 overflow-hidden rounded-t-xl">
                <img 
                  src={service.image} 
                  alt={service.title} 
                  className="w-full h-full object-cover"
                />
              </div>
              <CardHeader>
                <CardTitle className="text-xl text-dark">{service.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-gray-600 mb-4">
                  {service.description}
                </p>
                <ul className="text-sm text-gray-500 mb-4">
                  {service.features.map((feature) => (
                    <li key={feature}>• {feature}</li>
                  ))}
                </ul>
                <Link href={service.href}>
                  <span className="text-primary font-semibold hover:text-blue-700 transition-colors cursor-pointer">
                    Mehr erfahren →
                  </span>
                </Link>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
