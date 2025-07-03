import { Link } from "wouter";

export default function Footer() {
  return (
    <footer className="bg-gray-900 text-white py-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <h3 className="text-2xl font-bold mb-4">Werbedruck GM</h3>
            <p className="text-gray-100 mb-4">
              Ihr professioneller Partner für Digitaldruck, Foliendesign, Textilveredelung 
              und Lasergravuren im Oberbergischen. Qualität "MadeInOberberg" vom Meister.
            </p>
            <div className="text-gray-100">
              <p>c/o Sonja Gerharz Buchhaltungsbüro</p>
              <p>Alte Landstr. 57</p>
              <p>51647 Gummersbach</p>
              <p>Tel: 02262-1088</p>
              <p>info@Deine-Werbewerkstatt.de</p>
            </div>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Leistungen</h4>
            <ul className="space-y-2 text-gray-100">
              <li>
                <Link href="/digitaldruck">
                  <span className="hover:text-white transition-colors cursor-pointer">Digitaldruck</span>
                </Link>
              </li>
              <li>
                <Link href="/foliendesign">
                  <span className="hover:text-white transition-colors cursor-pointer">Foliendesign</span>
                </Link>
              </li>
              <li>
                <Link href="/textilveredelung">
                  <span className="hover:text-white transition-colors cursor-pointer">Textilveredelung</span>
                </Link>
              </li>
              <li>
                <Link href="/lasergravuren">
                  <span className="hover:text-white transition-colors cursor-pointer">Lasergravuren</span>
                </Link>
              </li>
            </ul>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Rechtliches</h4>
            <ul className="space-y-2 text-gray-100">
              <li>
                <Link href="/impressum">
                  <span className="hover:text-white transition-colors cursor-pointer">Impressum</span>
                </Link>
              </li>
              <li>
                <Link href="/datenschutz">
                  <span className="hover:text-white transition-colors cursor-pointer">Datenschutz</span>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-600 mt-8 pt-8 text-center text-gray-200">
          <p>&copy; 2024 Werbedruck GM. Alle Rechte vorbehalten.</p>
        </div>
      </div>
    </footer>
  );
}
