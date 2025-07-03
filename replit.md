# Werbedruck GM Website

## Overview

This is a German advertising/printing company website built with React frontend and Express.js backend. The application showcases services like digital printing, foil design, textile finishing, and laser engraving. It features a contact form system and is designed to be a professional business website for "Werbedruck GM" (Advertising Print GM) in the Oberbergischen region of Germany.

## System Architecture

The application follows a full-stack monorepo structure with clear separation between client and server code:

- **Frontend**: React 18 with TypeScript, using Vite as the build tool
- **Backend**: Express.js server with TypeScript
- **Database**: PostgreSQL with Drizzle ORM (configured but currently using in-memory storage)
- **Styling**: Tailwind CSS with shadcn/ui component library
- **Build System**: Vite for frontend, esbuild for backend production builds

## Key Components

### Frontend Architecture
- **Router**: Uses Wouter for client-side routing
- **State Management**: React Query (@tanstack/react-query) for server state
- **UI Components**: shadcn/ui component library with Radix UI primitives
- **Forms**: React Hook Form with Zod validation
- **Styling**: Tailwind CSS with custom CSS variables for theming

### Backend Architecture
- **Server Framework**: Express.js with TypeScript
- **API Layer**: RESTful endpoints for contact form submissions
- **Data Layer**: Drizzle ORM with PostgreSQL dialect
- **Storage**: Currently using in-memory storage (MemStorage class), with database schema defined for future PostgreSQL integration
- **Session Management**: Connect-pg-simple for PostgreSQL sessions (configured)

### Database Schema
The application defines two main entities:
- **Users**: Basic user authentication structure (id, username, password)
- **Contact Submissions**: Form submissions with contact details and service requests

## Data Flow

1. **Contact Form Submission**:
   - User fills out contact form on `/kontakt` page
   - Form data validated using Zod schemas
   - Submitted to `/api/contact` endpoint
   - Stored in memory (will be stored in PostgreSQL when connected)
   - Success/error feedback via toast notifications

2. **Admin Interface**:
   - `/api/contact-submissions` endpoint for retrieving all submissions
   - Currently returns data from memory storage

3. **Static Content**:
   - Service pages (digitaldruck, foliendesign, textilveredelung, lasergravuren)
   - Company information pages (about, impressum, datenschutz)
   - Portfolio showcase with service examples

## External Dependencies

### Frontend Dependencies
- **React Ecosystem**: React 18, React DOM, React Router (Wouter)
- **UI Framework**: Radix UI primitives, shadcn/ui components
- **State Management**: TanStack Query for server state
- **Form Handling**: React Hook Form with Hookform Resolvers
- **Validation**: Zod for schema validation
- **Styling**: Tailwind CSS, class-variance-authority, clsx
- **Utilities**: date-fns for date formatting, lucide-react for icons

### Backend Dependencies
- **Server**: Express.js with TypeScript support
- **Database**: Drizzle ORM, @neondatabase/serverless for PostgreSQL
- **Session**: connect-pg-simple for session storage
- **Validation**: Zod for API request validation
- **Development**: tsx for TypeScript execution, Vite for development server

### Development Tools
- **Build**: Vite (frontend), esbuild (backend)
- **TypeScript**: Full TypeScript support across the stack
- **Linting/Formatting**: Configuration ready for ESLint/Prettier
- **Replit Integration**: Cartographer plugin and runtime error overlay

## Deployment Strategy

The application is configured for multiple deployment scenarios:

### Development Mode
- Frontend served via Vite dev server with HMR
- Backend runs with tsx for TypeScript execution
- Integrated development experience with proxy setup

### Production Mode
- Frontend built to static files in `dist/public`
- Backend compiled to ESM bundle in `dist/index.js`
- Express serves both API routes and static frontend files
- Environment-based configuration for database connections

### Database Strategy
- **Current**: In-memory storage for development/testing
- **Production Ready**: PostgreSQL with Drizzle migrations
- **Migration Path**: `npm run db:push` command configured for schema deployment

The application is designed to be easily deployable to platforms like Replit, Vercel, or any Node.js hosting environment with PostgreSQL support.

## User Preferences

Preferred communication style: Simple, everyday language.

## Changelog

Changelog:
- July 03, 2025. Initial setup