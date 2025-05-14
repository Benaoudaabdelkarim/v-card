FROM php:8.2-fpm
ARG user
ARG uid
RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zlib1g-dev \
    libzip-dev \
    zip \
    unzip \
    nano \ 
    iputils-ping \
    iproute2 \
    cron \
    gnupg \
    ca-certificates

# Add Source for Node.js v14
RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash - && \
    apt install -y nodejs npm

RUN apt clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install zip pdo_mysql mbstring exif pcntl bcmath gd intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create the log file to be able to run tail
RUN touch /var/log/cron.log
# Setup cron job
RUN (crontab -l -u $user ; echo "* * * * * cd /var/www && /usr/local/bin/php artisan schedule:run >> /dev/null 2>&1") | crontab

# Run the command on container startup
CMD cron && docker-php-entrypoint php-fpm