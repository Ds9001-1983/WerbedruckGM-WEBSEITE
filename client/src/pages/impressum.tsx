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
                c/o Sonja Gerharz Buchhaltungsbüro<br />
                Alte Landstr. 57<br />
                51647 Gummersbach<br />
                Deutschland
              </p>
            </div>
            <div className="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
              <p className="text-sm text-yellow-800 font-medium">
                <strong>Beachten Sie, dass wir KEIN Ladenlokal haben</strong><br />
                Servicezeiten NUR nach Vereinbarung!
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
              <strong>Telefon:</strong> 02262-1088
            </p>
            <p className="text-gray-600">
              <strong>E-Mail:</strong> info@Deine-Werbewerkstatt.de
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Umsatzsteuer</CardTitle>
          </CardHeader>
          <CardContent className="space-y-2">
            <p className="text-gray-600">
              <strong>Zuständiges Finanzamt:</strong> Gummersbach
            </p>
            <p className="text-gray-600">
              <strong>Umsatzsteuer-ID:</strong> DE305922495
            </p>
            <p className="text-gray-600">
              <strong>Gerichtsstand:</strong> AG Gummersbach
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Geschäftstätigkeit</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600">
              Unser Unternehmen beliefert ausschließlich Vereine, Gewerbetreibende und Kapitalgesellschaften - 
              <strong>keine Privatpersonen</strong>.
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">Datenschutzbeauftragter</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600">
              <a href="https://www.sor.de/" target="_blank" rel="noopener noreferrer" className="text-primary hover:text-blue-700 underline">
                Sven-Oliver Rüsche
              </a> 
              {" "}(
              <a href="https://www.arkm.de/" target="_blank" rel="noopener noreferrer" className="text-primary hover:text-blue-700 underline">
                ARKM.de
              </a>
              )
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
