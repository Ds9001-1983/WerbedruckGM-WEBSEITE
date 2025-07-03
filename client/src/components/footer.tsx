import { Link } from "wouter";

export default function Footer() {
  return (
    <footer className="bg-dark text-white py-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <h3 className="text-2xl font-bold mb-4">Werbedruck GM</h3>
            <p className="text-gray-300 mb-4">
              Ihr professioneller Partner für Digitaldruck, Foliendesign, Textilveredelung 
              und Lasergravuren im Oberbergischen. Qualität "MadeInOberberg" vom Meister.
            </p>
            <div className="text-gray-300">
              <p>Musterstraße 123</p>
              <p>12345 Oberberg</p>
              <p>Tel: +49 (0) 123 456789</p>
              <p>info@werbedruck-gm.de</p>
            </div>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Leistungen</h4>
            <ul className="space-y-2 text-gray-300">
              <li>
                <Link href="/digitaldruck">
                  <a className="hover:text-white transition-colors">Digitaldruck</a>
                </Link>
              </li>
              <li>
                <Link href="/foliendesign">
                  <a className="hover:text-white transition-colors">Foliendesign</a>
                </Link>
              </li>
              <li>
                <Link href="/textilveredelung">
                  <a className="hover:text-white transition-colors">Textilveredelung</a>
                </Link>
              </li>
              <li>
                <Link href="/lasergravuren">
                  <a className="hover:text-white transition-colors">Lasergravuren</a>
                </Link>
              </li>
            </ul>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Rechtliches</h4>
            <ul className="space-y-2 text-gray-300">
              <li>
                <Link href="/impressum">
                  <a className="hover:text-white transition-colors">Impressum</a>
                </Link>
              </li>
              <li>
                <Link href="/datenschutz">
                  <a className="hover:text-white transition-colors">Datenschutz</a>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
          <p>&copy; 2024 Werbedruck GM. Alle Rechte vorbehalten.</p>
        </div>
      </div>
    </footer>
  );
}
