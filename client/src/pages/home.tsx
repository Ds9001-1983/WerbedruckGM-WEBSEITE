import HeroSection from "@/components/hero-section";
import ServicesSection from "@/components/services-section";
import PortfolioSection from "@/components/portfolio-section";
import { Link } from "wouter";
import { Button } from "@/components/ui/button";

export default function Home() {
  return (
    <div>
      <HeroSection />
      <ServicesSection />
      
      {/* About Section */}
      <section id="about" className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-dark mb-6">Über Werbedruck GM</h2>
              <p className="text-lg text-gray-600 mb-6">
                Seit 2018 sind wir Ihr zuverlässiger Partner für professionelle Werbetechnik im Oberbergischen. 
                Mit dem stetigen Antrieb, Werbetechnik vom Kunden für den Kunden preisgünstig und qualitativ 
                hochwertig auch in Einzel- und Kleinauflagen umzusetzen.
              </p>
              <p className="text-lg text-gray-600 mb-6">
                Durch stetige Weiterbildung auf Fachmessen und Workshops versuchen wir für Sie immer ein kleines 
                bisschen besser und innovativer zu sein als unsere Mitbewerber. Unser umfangreicher Maschinenpark 
                ermöglicht es uns, auch komplexe Projekte schnell und professionell umzusetzen.
              </p>
              
              <div className="grid grid-cols-2 gap-6 mb-8">
                <div className="text-center">
                  <div className="text-3xl font-bold text-primary mb-2">2018</div>
                  <div className="text-gray-600">Gegründet</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-primary mb-2">1000+</div>
                  <div className="text-gray-600">Projekte</div>
                </div>
              </div>
              
              <Link href="/kontakt">
                <Button className="bg-primary hover:bg-blue-700 text-white">
                  Persönlichen Termin vereinbaren
                </Button>
              </Link>
            </div>
            
            <div className="grid grid-cols-2 gap-4">
              <img 
                src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&h=600" 
                alt="Moderne Druckwerkstatt" 
                className="rounded-xl shadow-lg" 
              />
              <img 
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&h=600" 
                alt="Professionelle Drucktechnik" 
                className="rounded-xl shadow-lg mt-8" 
              />
            </div>
          </div>
        </div>
      </section>

      <PortfolioSection />
    </div>
  );
}
