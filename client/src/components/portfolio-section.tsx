import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

const portfolioItems = [
  {
    title: "Fahrzeugbeschriftung",
    image: "https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=800&h=600",
    description: "Vollbeklebung mit hochwertigem Design"
  },
  {
    title: "Großformat Banner",
    image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&h=600",
    description: "Wetterbeständige Außenwerbung"
  },
  {
    title: "T-Shirt Druck",
    image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&h=600",
    description: "Individuelle Textilveredelung"
  },
  {
    title: "Lasergravur",
    image: "https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=800&h=600",
    description: "Präzise Holzgravuren"
  },
  {
    title: "Geschäftsschilder",
    image: "https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&h=600",
    description: "Professionelle Außenwerbung"
  },
  {
    title: "Aufkleber Design",
    image: "https://images.unsplash.com/photo-1594736797933-d0dbc1b60959?auto=format&fit=crop&w=800&h=600",
    description: "Individuelle Designs & Formen"
  }
];

export default function PortfolioSection() {
  return (
    <section id="portfolio" className="py-20 bg-neutral">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-dark mb-4">Unser Portfolio</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Entdecken Sie eine Auswahl unserer realisierten Projekte - von kleinen Aufklebern 
            bis hin zu großformatigen Werbeanlagen.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {portfolioItems.map((item) => (
            <Card key={item.title} className="bg-white shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div className="relative h-48 overflow-hidden rounded-t-xl">
                <img 
                  src={item.image} 
                  alt={item.title} 
                  className="w-full h-full object-cover"
                />
              </div>
              <CardHeader>
                <CardTitle className="text-lg text-dark">{item.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-gray-600">{item.description}</p>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
