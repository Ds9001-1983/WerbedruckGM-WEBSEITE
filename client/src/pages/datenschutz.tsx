import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

export default function Datenschutz() {
  return (
    <div className="min-h-screen py-20 bg-neutral">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h1 className="text-4xl md:text-5xl font-bold text-dark mb-4">Datenschutzerklärung</h1>
          <p className="text-lg text-gray-600">
            Informationen zum Umgang mit Ihren personenbezogenen Daten
          </p>
        </div>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">1. Datenschutz auf einen Blick</CardTitle>
          </CardHeader>
          <CardContent className="space-y-4">
            <div>
              <h4 className="font-semibold text-dark mb-2">Allgemeine Hinweise</h4>
              <p className="text-gray-600 text-sm">
                Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten 
                passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie 
                persönlich identifiziert werden können.
              </p>
            </div>
            
            <div>
              <h4 className="font-semibold text-dark mb-2">Datenerfassung auf dieser Website</h4>
              <p className="text-gray-600 text-sm">
                Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten 
                können Sie dem Impressum dieser Website entnehmen.
              </p>
            </div>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">2. Hosting</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600 text-sm">
              Wir hosten die Inhalte unserer Website bei externen Dienstleistern. Hierbei können personenbezogene 
              Daten verarbeitet werden. Die Verarbeitung erfolgt zur Erfüllung unserer vertraglichen Leistungen 
              gegenüber unseren potentiellen und bestehenden Kunden (Art. 6 Abs. 1 lit. b DSGVO) und im Interesse 
              einer sicheren, schnellen und effizienten Bereitstellung unseres Online-Angebots durch einen 
              professionellen Anbieter (Art. 6 Abs. 1 lit. f DSGVO).
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">3. Allgemeine Hinweise und Pflichtinformationen</CardTitle>
          </CardHeader>
          <CardContent className="space-y-4">
            <div>
              <h4 className="font-semibold text-dark mb-2">Datenschutz</h4>
              <p className="text-gray-600 text-sm">
                Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln 
                Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzbestimmungen 
                sowie dieser Datenschutzerklärung.
              </p>
            </div>
            
            <div>
              <h4 className="font-semibold text-dark mb-2">Hinweis zur verantwortlichen Stelle</h4>
              <p className="text-gray-600 text-sm mb-2">
                Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:
              </p>
              <p className="text-gray-600 text-sm">
                Werbedruck GM<br />
                Max Mustermann<br />
                Musterstraße 123<br />
                12345 Oberberg<br />
                Telefon: +49 (0) 123 456789<br />
                E-Mail: info@werbedruck-gm.de
              </p>
            </div>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">4. Datenerfassung auf dieser Website</CardTitle>
          </CardHeader>
          <CardContent className="space-y-4">
            <div>
              <h4 className="font-semibold text-dark mb-2">Kontaktformular</h4>
              <p className="text-gray-600 text-sm">
                Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular 
                inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall 
                von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.
              </p>
            </div>
            
            <div>
              <h4 className="font-semibold text-dark mb-2">Server-Log-Dateien</h4>
              <p className="text-gray-600 text-sm">
                Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log-Dateien, 
                die Ihr Browser automatisch an uns übermittelt. Dies sind: Browsertyp und Browserversion, verwendetes 
                Betriebssystem, Referrer URL, Hostname des zugreifenden Rechners, Uhrzeit der Serveranfrage und IP-Adresse.
              </p>
            </div>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">5. Ihre Rechte</CardTitle>
          </CardHeader>
          <CardContent className="space-y-2">
            <p className="text-gray-600 text-sm">
              Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer 
              gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung, 
              Sperrung oder Löschung dieser Daten zu verlangen.
            </p>
            <p className="text-gray-600 text-sm">
              Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit unter der im Impressum 
              angegebenen Adresse an uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen 
              Aufsichtsbehörde zu.
            </p>
          </CardContent>
        </Card>

        <Card className="mb-8">
          <CardHeader>
            <CardTitle className="text-2xl text-dark">6. Widerspruch gegen Werbe-Mails</CardTitle>
          </CardHeader>
          <CardContent>
            <p className="text-gray-600 text-sm">
              Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung von 
              nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen. 
              Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten 
              Zusendung von Werbeinformationen, etwa durch Spam-E-Mails, vor.
            </p>
          </CardContent>
        </Card>

        <div className="text-center text-gray-500 text-sm">
          <p>Stand: 03. Juli 2025</p>
        </div>
      </div>
    </div>
  );
}
