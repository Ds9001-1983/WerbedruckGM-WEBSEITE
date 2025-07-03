import { Link } from "wouter";
import { Button } from "@/components/ui/button";

export default function HeroSection() {
  return (
    <section className="relative bg-gradient-to-br from-primary to-blue-800 text-white">
      <div className="absolute inset-0 bg-black opacity-40"></div>
      <div 
        className="absolute inset-0"
        style={{
          backgroundImage: "url('https://images.unsplash.com/photo-1541961017774-22349e4a1262?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&h=1080')",
          backgroundSize: "cover",
          backgroundPosition: "center"
        }}
      ></div>
      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div className="text-center">
          <h1 className="text-4xl md:text-6xl font-bold mb-6">
            Qualität "MadeInOberberg"<br />
            <span className="text-yellow-400">vom Meister</span>
          </h1>
          <p className="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Professioneller Digitaldruck, Foliendesign, Textilveredelung und Lasergravuren seit 2018. 
            Preisgünstig, qualitativ hochwertig - auch in Einzel- und Kleinauflagen.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Link href="/kontakt">
              <Button size="lg" className="bg-accent hover:bg-red-700 text-white px-8 py-4 text-lg font-semibold">
                Jetzt Angebot erhalten
              </Button>
            </Link>
            <Link href="#services">
              <Button 
                size="lg" 
                variant="outline" 
                className="bg-white bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 text-white border-white px-8 py-4 text-lg font-semibold"
              >
                Unsere Leistungen
              </Button>
            </Link>
          </div>
        </div>
      </div>
    </section>
  );
}
