import { useState } from "react";
import { Link, useLocation } from "wouter";
import { Menu, X } from "lucide-react";
import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";

export default function Navigation() {
  const [isOpen, setIsOpen] = useState(false);
  const [location] = useLocation();

  const navItems = [
    { href: "/", label: "Start" },
    { href: "/digitaldruck", label: "Digitaldruck" },
    { href: "/foliendesign", label: "Foliendesign" },
    { href: "/textilveredelung", label: "Textilveredelung" },
    { href: "/lasergravuren", label: "Lasergravuren" },
    { href: "/ueber-uns", label: "Über uns" },
  ];

  return (
    <nav className="bg-white shadow-lg sticky top-0 z-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-16">
          <div className="flex items-center">
            <Link href="/">
              <h1 className="text-2xl font-bold text-primary cursor-pointer hover:text-primary/80 transition-colors">
                Werbedruck GM
              </h1>
            </Link>
          </div>
          
          {/* Desktop Navigation */}
          <div className="hidden md:block">
            <div className="ml-10 flex items-baseline space-x-4">
              {navItems.map((item) => (
                <Link key={item.href} href={item.href}>
                  <span className={cn(
                    "px-3 py-2 text-sm font-medium transition-colors cursor-pointer",
                    location === item.href
                      ? "text-primary" 
                      : "text-gray-600 hover:text-primary"
                  )}>
                    {item.label}
                  </span>
                </Link>
              ))}
              <Link href="/kontakt">
                <Button className="bg-primary text-white hover:bg-blue-700">
                  Kontakt
                </Button>
              </Link>
            </div>
          </div>
          
          {/* Mobile menu button */}
          <div className="md:hidden">
            <Button
              variant="outline"
              size="sm"
              onClick={() => setIsOpen(!isOpen)}
              className="p-2"
            >
              {isOpen ? <X className="h-5 w-5" /> : <Menu className="h-5 w-5" />}
            </Button>
          </div>
        </div>
      </div>
      
      {/* Mobile Navigation Menu */}
      {isOpen && (
        <div className="md:hidden">
          <div className="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-50">
            {navItems.map((item) => (
              <Link key={item.href} href={item.href}>
                <span 
                  className={cn(
                    "block px-3 py-2 text-base font-medium cursor-pointer",
                    location === item.href
                      ? "text-primary" 
                      : "text-gray-600 hover:text-primary"
                  )}
                  onClick={() => setIsOpen(false)}
                >
                  {item.label}
                </span>
              </Link>
            ))}
            <Link href="/kontakt">
              <span 
                className="block px-3 py-2 text-base font-medium text-gray-600 hover:text-primary cursor-pointer"
                onClick={() => setIsOpen(false)}
              >
                Kontakt
              </span>
            </Link>
          </div>
        </div>
      )}
    </nav>
  );
}
