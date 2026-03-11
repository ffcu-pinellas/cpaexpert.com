# push.ps1 - Easy Pushing to GitHub and Auto-Deployment to Hostinger
# This script adds all changes, commits, and pushes to your GitHub repository.

param (
    [string]$message = "Update CPAExpert website"
)

# --- Hostinger Details (For your reference) ---
# Website: yourcpaexpert.com
# Database: u664663598_cpaexpert
# Username: u664663598_cpaexpert
# Pass: Messenger@0090
# ----------------------------------------------

# Set the repository URL
$REPO_URL = "https://github.com/ffcu-pinellas/cpaexpert.com.git"

# 1. Check for Git Repository
if (!(Test-Path .git)) {
    Write-Host "Initializing Git repository..." -ForegroundColor Cyan
    git init
    git remote add origin $REPO_URL
    git branch -M main
}
else {
    # Ensure the remote is correct
    $remote = git remote get-url origin 2>$null
    if ($remote -ne $REPO_URL) {
        Write-Host "Updating remote origin to $REPO_URL..." -ForegroundColor Cyan
        git remote set-url origin $REPO_URL
    }
}

# 2. Add All Changes
Write-Host "Adding changes to Git..." -ForegroundColor Cyan
git add .

# 3. Commit Changes
Write-Host "Committing changes with message: '$message'..." -ForegroundColor Cyan
# Check if there are any changes to commit
$status = git status --porcelain
if ($null -eq $status -or $status -eq "") {
    Write-Host "No changes to commit." -ForegroundColor Yellow
}
else {
    git commit -m "$message"
}

# 4. Push to GitHub
Write-Host "Pushing to GitHub..." -ForegroundColor Cyan
git push origin main

Write-Host "`nSuccess! Your changes are now live on GitHub." -ForegroundColor Green
Write-Host "Hostinger Note: Go to 'Git' under the 'Advanced' section in hPanel and click 'Re-deploy' if it doesn't auto-update." -ForegroundColor Gray
