cd {SITE_DIRECTORY}

# Create .env file if it doesn't exist
if [ ! -f .env ] && [ -f .env.production.example ]; then
  cp .env.production.example .env
fi

git pull origin main

# Install Composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

{RELOAD_PHP_FPM}


# Corepack is distributed with Node.js from version 14.19.0 up to (but not including) 25.0.0.
npx corepack enable

# Download and install the package manager configured in the local project.
npx corepack install

npx corepack pnpm install --frozen-lockfile
npx corepack pnpm build

# Clean Kirby cache
rm -rf storage/cache/{SITE_DOMAIN}

echo "🚀 Application deployed!"