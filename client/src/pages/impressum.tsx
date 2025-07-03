import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

export default function Impressum() {
  return (
    <div className="min-h-screen py-20 bg-neutral">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-dark mb-4">Impressum</h1>
          <p className="text-lg text-gray-600">
            Angaben gemäß § 5 TMG
          </p>
        </div>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Anbieter</CardTitle>
          </CardHeader>
          <CardContent className="space-y-4">
            <div>
              <h3 className="font-semibold text-dark mb-2">Werbedruck GM</h3>
              <p className="text-gray-600">
                Musterstraße 123<br />
                12345 Oberberg<br />
                Deutschland
              </p>
            </div>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Kontakt</CardTitle>
          </CardHeader>
          <CardContent className="space-y-2">
            <p className="text-gray-600">
              <strong>Telefon:</strong> +49 (0) 123 456789
            </p>
            <p className="text-gray-600">
              <strong>E-Mail:</strong> info@werbedruck-gm.de
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Geschäftsführung</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600">Max Mustermann</p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Registereintrag</CardTitle>
          </CardHeader>
          <CardContent className="space-y-2">
            <p className="text-gray-600">
              <strong>Registergericht:</strong> Amtsgericht Köln
            </p>
            <p className="text-gray-600">
              <strong>Registernummer:</strong> HRB 12345
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Umsatzsteuer</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600">
              <strong>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:</strong><br />
              DE123456789
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600">
              Max Mustermann<br />
              Musterstraße 123<br />
              12345 Oberberg
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Haftungsausschluss</CardTitle>
          </CardHeader>
          <CardContent className="space-y-4">
            <div>
              <h4 className="font-semibold text-dark mb-2">Haftung für Inhalte</h4>
              <p className="text-gray-600 text-sm">
                Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den 
                allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht 
                unter der Verpflichtung, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach 
                Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
              </p>
            </div>
            
            <div>
              <h4 className="font-semibold text-dark mb-2">Haftung für Links</h4>
              <p className="text-gray-600 text-sm">
                Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. 
                Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten 
                Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
              </p>
            </div>
            
            <div>
              <h4 className="font-semibold text-dark mb-2">Urheberrecht</h4>
              <p className="text-gray-600 text-sm">
                Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen 
                Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der 
                Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
              </p>
            </div>
          </CardContent>
        </Card>

        <Card>
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Streitschlichtung</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600 text-sm">
              Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
              <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" className="text-primary hover:text-blue-700 underline ml-1">
                https://ec.europa.eu/consumers/odr/
              </a>
              <br /><br />
              Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer 
              Verbraucherschlichtungsstelle teilzunehmen.
            </p>
          </CardContent>
        </Card>
      </div>
    </div>
  );
}
