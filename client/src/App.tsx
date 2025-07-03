import { Switch, Route } from "wouter";
import { queryClient } from "./lib/queryClient";
import { QueryClientProvider } from "@tanstack/react-query";
import { Toaster } from "@/components/ui/toaster";
import { TooltipProvider } from "@/components/ui/tooltip";
import Navigation from "@/components/navigation";
import Footer from "@/components/footer";
import Home from "@/pages/home";
import Digitaldruck from "@/pages/digitaldruck";
import Foliendesign from "@/pages/foliendesign";
import Textilveredelung from "@/pages/textilveredelung";
import Lasergravuren from "@/pages/lasergravuren";
import Contact from "@/pages/contact";
import About from "@/pages/about";
import Impressum from "@/pages/impressum";
import Datenschutz from "@/pages/datenschutz";
import NotFound from "@/pages/not-found";

function Router() {
  return (
    <div className="min-h-screen flex flex-col">
      <Navigation />
      <main className="flex-grow">
        <Switch>
          <Route path="/" component={Home} />
          <Route path="/digitaldruck" component={Digitaldruck} />
          <Route path="/foliendesign" component={Foliendesign} />
          <Route path="/textilveredelung" component={Textilveredelung} />
          <Route path="/lasergravuren" component={Lasergravuren} />
          <Route path="/kontakt" component={Contact} />
          <Route path="/ueber-uns" component={About} />
          <Route path="/impressum" component={Impressum} />
          <Route path="/datenschutz" component={Datenschutz} />
          <Route component={NotFound} />
        </Switch>
      </main>
      <Footer />
    </div>
  );
}

function App() {
  return (
    <QueryClientProvider client={queryClient}>
      <TooltipProvider>
        <Toaster />
        <Router />
      </TooltipProvider>
    </QueryClientProvider>
  );
}

export default App;
