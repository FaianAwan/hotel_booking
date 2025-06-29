# Railway Deployment Guide for Hotel Booking System

This guide will help you deploy your Laravel Hotel Booking System to Railway using SQLite.

## Prerequisites

1. A Railway account (sign up at [railway.app](https://railway.app))
2. Git repository with your Laravel project
3. Railway CLI (optional but recommended)

## Deployment Steps

### 1. Prepare Your Repository

Your repository should now include these files:
- `railway.json` - Railway configuration
- `nixpacks.toml` - Build configuration
- `Procfile` - Process definition
- `deploy-railway.sh` - Deployment script

### 2. Deploy to Railway

#### Option A: Using Railway Dashboard (Recommended)

1. Go to [railway.app](https://railway.app) and sign in
2. Click "New Project"
3. Select "Deploy from GitHub repo"
4. Connect your GitHub account and select your repository
5. Railway will automatically detect it's a Laravel project

#### Option B: Using Railway CLI

```bash
# Install Railway CLI
npm install -g @railway/cli

# Login to Railway
railway login

# Initialize project
railway init

# Deploy
railway up
```

### 3. Configure Environment Variables

In your Railway project dashboard, go to the "Variables" tab and add these environment variables:

```env
APP_NAME="Hotel Booking System"
APP_ENV=production
APP_KEY=base64:srCAC2wYvv43K7vo3EDJMUxTPVdIoxgfQTghoVoP0b4=
APP_DEBUG=false
APP_URL=https://your-railway-app-url.railway.app

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

# SQLite Database Configuration
DB_CONNECTION=sqlite
DB_DATABASE=/tmp/database.sqlite

# Session Configuration
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Cache Configuration
CACHE_STORE=file

# Queue Configuration
QUEUE_CONNECTION=sync

# Mail Configuration
MAIL_MAILER=log
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="Hotel Booking System"

# File System
FILESYSTEM_DISK=local

# Redis (optional)
REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### 4. Important Notes

#### Database
- The SQLite database will be created at `/tmp/database.sqlite` during deployment
- This is a temporary location and data will be lost on container restart
- For production, consider using Railway's PostgreSQL service

#### File Storage
- File uploads will be stored in the container's filesystem
- Files will be lost on container restart
- For production, consider using Railway's volume service or external storage

#### Sessions
- Sessions are stored in files by default
- Consider using database sessions for better scalability

### 5. Post-Deployment

After deployment:

1. **Check the logs** in Railway dashboard to ensure everything deployed successfully
2. **Test your application** by visiting the provided URL
3. **Create an admin user** if needed:
   ```bash
   railway run php artisan tinker
   # Then create a user manually or run your seeders
   ```

### 6. Custom Domain (Optional)

1. In Railway dashboard, go to your project
2. Click on your service
3. Go to "Settings" tab
4. Add your custom domain

### 7. Monitoring

Railway provides:
- Real-time logs
- Performance metrics
- Automatic restarts on failure
- Health checks

## Troubleshooting

### Common Issues

1. **Database connection errors**
   - Ensure SQLite extension is enabled (handled by nixpacks.toml)
   - Check database file permissions

2. **500 errors**
   - Check Railway logs for specific error messages
   - Ensure all environment variables are set correctly

3. **File permission errors**
   - The deployment script sets proper permissions
   - Check if storage and bootstrap/cache directories are writable

### Getting Help

- Check Railway logs in the dashboard
- Review Laravel logs: `railway run php artisan log:show`
- Railway documentation: [docs.railway.app](https://docs.railway.app)

## Production Considerations

For a production environment, consider:

1. **Database**: Use Railway's PostgreSQL service instead of SQLite
2. **File Storage**: Use Railway's volume service or external storage (AWS S3, etc.)
3. **Caching**: Use Redis for better performance
4. **Email**: Configure a proper email service (SendGrid, Mailgun, etc.)
5. **SSL**: Railway provides automatic SSL certificates
6. **Monitoring**: Set up proper logging and monitoring

## Migration from SQLite to PostgreSQL

If you want to switch to PostgreSQL later:

1. Add PostgreSQL service in Railway
2. Update environment variables:
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=your-postgres-host
   DB_PORT=5432
   DB_DATABASE=your-database
   DB_USERNAME=your-username
   DB_PASSWORD=your-password
   ```
3. Run migrations: `railway run php artisan migrate:fresh`

---

Your Laravel Hotel Booking System is now ready for Railway deployment! 🚀 