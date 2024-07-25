# Pub

A simple PHP-based micro framework for making websites.

---

## Core Concepts

- PHP vanilla templates for speed and flexibility.
- JSON based files for simple content creation and updates.
- Automated routing based on page file structure.

## Directory Structure
Everything needed to run Pub is contained in the "application" directory. Below details what's inside.

- Templates - The global templates for layouts and pages. Typically contains shared elements across the website.
  - Default is the base.php template. Additional templates can be created and utilized at the page level.
- Layouts - The layouts for various page types within the website.
  - Default is the standard.php layout for the most common pages. Additional layouts can be created and utilized at the page level.
- Components - A place to create more granular components (e.g. FAQ component, personal quote component, image gallery component, etc...) for use with in layouts that would be shared across various layouts and pages.
  - No default elements. It's purely there if you need it or don't.
- Pages - Where all website content is stored in the format of JSON files.
  - Default or system pages include the Home page and the 404 page.
- Models - Where content model definitions go for use with the GUI CMS to create new pages.
  - Not in use at this time, but here as a placeholder for future development.

## Page File Format and Structure

### Page File Structure
- URLs align with the naming of the page files.
  - Example: /about = /pages/about/index.json
- Page files can be structured within directories.
  - Example: /about/the-team = /pages/about/the-team/index.json
- The home page and 404 page of the website are present by default.
  - Home = /pages/home/index.json
  - 404 = /pages/fourohfour/index.json

### Page File Format
- Each page is JSON data structured as needed for each page.
- The first required node is "metadata" which at minimum should contain "meta_title" and "meta_description".
- The second required node is "content" which at minimum should containt a string of content.
  - The "content" node can contain any number of children as single string values or nested nodes for more complex page content.
- Optional nodes include "template" and "layout" which allows you to specify a unique layout or tempate for that page.

### Sample Page JSON With All Options

```
{
    "template": "alt_base",
    "layout": "home",
    "model": "standard",
    "data": {
        "metadata": {
            "meta_title": "David Zachry - Designer, web developer, project planner, and manager.",
            "meta_description": "David Zachry is a seasoned graphic designer and developer with experience in project planning and management."
        },
        "content": {
            "title": "I'm a seasoned, multifaceted web/graphic designer and web developer with experience in ux and project/team management."
        }
    }
}
```
### Installation and Setup

## Installation
Download the repo and upload the "application" folder and all it's content to your web server just outside of the public web root.

## Setup
Download the "index.php" and the ".htaccess" files in the "public" folder and upload them to your public web root. Depending on your web server, you may need to handle URL rewrites diffently. If that's the case, then you may not need the ".htaccess" file.

### The Future
- The ultimate goal is to extened this into a bonified CMS with a visual interface for creating pages and content.

### Why Another Website Management Framework?
I've been working on websites for nearly 25 years and have worked in the majority of popular CMS platforms (WordPress, Drupal, Joomla, ExpressionEngine, SiteCore, Umbraco. Contentful). While there is absolutely nothing wrong with any of these platforms, they've always felt bloated and over complicated at times. I've always had it in my head to take a stab at creating simple, flatfile based framework that could eventually become a full fledge CMS. Join me on my journey as I give this a shot!

### Why PUB?
The abbreviation pub evokes two things for me as I've begun this development work. Firstly, the concept of publishing content which is at the heart of the web. And secondly, enjoying a refreshing beer at your local pub where there's no stress or worries. Who wouldn't want that?
