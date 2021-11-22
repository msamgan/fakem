# Turn on maintenance mode
php artisan down

# Pull the latest changes from the git repository
git reset --hard
git clean -df
git pull origin main

# Install/update composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Run database migrations
php artisan migrate --force

# Clear expired password reset tokens
php artisan auth:clear-resets

php artisan view:cache
php artisan optimize

# Install node modules
npm install

# Build assets using Laravel Mix
npm run prod

# Turn off maintenance mode
php artisan up
