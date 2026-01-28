# Presentation Templates Platform :rocket:
___

A full-stack web application for sharing and downloading PowerPoint presentation templates. Users can create categories, upload their templates, download others' work, and leave reviews with ratings.

## :star: Some screenshots

![First screenshot](https://github.com/dsvasiliev/presentation-templates/blob/master/Screenshots/1.jpeg?raw=true, "First screenshot")
![Second screenshot](https://github.com/dsvasiliev/presentation-templates/blob/master/Screenshots/2.jpeg?raw=true, "Second screenshot")

## :clipboard: Features
**:dart: Core Functionality**
- Template Management: Upload, browse, and download .pptx presentation templates
- Category System: Create and organize templates into categories with custom covers
- User Authentication: Secure registration and login system
- Review System: Rate templates (1-5 stars) and leave textual feedback
- Pagination: Efficient browsing through categories and templates

**:bar_chart: Statistics & Tracking** 
- Download counters (excludes author's own downloads)
- Template popularity tracking
- User activity monitoring

**:art: Design Features**
- Animated transitions between pages
- Responsive design for various screen sizes
- Custom SVG icons and visual elements
- Interactive UI elements with hover effects

## :file_cabinet: Database Schema
**Main Tables**
- *users* - User accounts and authentication
- *categories* - Template categories with descriptions and covers
- *templates* - Presentation templates with metadata
- *reviews_{template_id}* - Dynamic review tables for each template
**Key Relationships**
- Users → Templates (One-to-Many)
- Categories → Templates (One-to-Many)
- Templates → Reviews (One-to-Many)
**:closed_lock_with_key: Security Features**
- *SQL Injection Protection*: Prepared statements and parameterized queries
- *Session Management*: Secure session handling with cookies
- *File Upload Validation*: Format and size restrictions for uploaded files
- *Access Control*: Route protection for authenticated users only
- *XSS Prevention*: Output escaping for user-generated content
**:chart_with_upwards_trend: Performance Optimizations**
- *Database Indexing*: Optimized query performance on frequently accessed columns
- *Pagination*: Limits data loading for large datasets
- *Image Optimization*: Resized and compressed cover images
- *Caching Strategy*: Browser caching for static assets