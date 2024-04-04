#!/bin/sh
set -e

(git push) || true
    git add .
    git commit -m "Deploying to production"
    git push origin production 