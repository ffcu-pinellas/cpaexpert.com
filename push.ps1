param (
    [Parameter(Mandatory=$true)]
    [string]$Message
)

Write-Host "Starting Deployment Process..." -ForegroundColor Cyan

# Check for git
if (!(Get-Command git -ErrorAction SilentlyContinue)) {
    Write-Error "Git is not installed. Please install Git to continue."
    exit
}

# Add all changes
Write-Host "Adding changes to Git..."
git add .

# Commit
Write-Host "Committing changes: $Message"
git commit -m "$Message"

# Push to main (adjust branch name if necessary)
Write-Host "Pushing to remote repository (Hostinger)..."
git push origin main

Write-Host "Deployment Successful!" -ForegroundColor Green
