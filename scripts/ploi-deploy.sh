cd {SITE_DIRECTORY}

# Create .env file if it doesn't exist
if [ ! -f .env ] && [ -f .env.production.example ]; then
  cp .env.production.example .env
fi

git pull origin main

# Install Composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

{RELOAD_PHP_FPM}

# Enable Corepack and install pnpm
corepack prepare pnpm@latest --activate

# Install dependencies and build the project
corepack pnpm install
corepack pnpm build

# Clean Kirby cache
rm -rf storage/cache/{SITE_DOMAIN}

echo "🚀 Application deployed!"
