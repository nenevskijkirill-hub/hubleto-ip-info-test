## IP Info Finder

IP Info Finder is a web application that allows users to retrieve detailed information about any IP address and manage a list of favorite IPs. Users can enter an IP address, fetch information from an external API, view the results in a structured format, and save selected IPs to a favorites list. This project demonstrates handling of both client-side (JavaScript) and server-side (PHP) logic, working with JSON, and basic file storage.

## Features

User enters an IP address to get detailed information.

Fetches IP information from the ipwhois API.

Displays the retrieved information in a readable format.

Allows the user to save selected IPs to a favorites list (stored in favorites.json).

Displays the list of favorite IPs along with the saved information.

## Installation & Setup

Clone the repository:
git clone <repository-url>
cd <repository-folder>/apps/IpInfoTest

Start the PHP built-in server:
php -S localhost:80

Open your browser and navigate to:
http://localhost

## Usage

Enter an IP address in the input field.

Click Search to fetch information.

Review the information displayed in the results block.

Click Save to Favorites to store the IP in your favorites list.

Scroll down to see all saved favorite IPs with details.

## File Structure

apps/IpInfoTest/ contains:

index.php – Main HTML page

main.js – JavaScript logic

save_favorite.php – PHP endpoint to save favorites

load_favorites.php – PHP endpoint to load favorites

favorites.json – JSON file storing favorite IPs

FavoriteIP.php – PHP model for a favorite IP

README.md – Project documentation

## Technologies Used

PHP – for server-side data handling and file operations

JavaScript – client-side logic using Fetch API for API requests

JSON – to store and load favorites

HTML/CSS – for structuring and styling the user interface

## Sources & References

API: https://ipwhois.app/

PHP documentation for JSON handling and file operations: https://www.php.net/manual/en/book.json.php

JavaScript Fetch API documentation: https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API

## Author's Notes

Additional features may include filtering and searching favorites, exporting favorite IPs to CSV, or storing favorites in a database instead of a JSON file.
