# Development
> What mentioned here is for normal cases. Under special cases, we may override it

## Key points
- everything is BE works, except css & some of js
- less code, more on configurations, especially on the field display
- less custom template, more on configurations
- custom hooks, template, js & css on theme,
- custom blocks, forms, & any other plugins on module
- French for label/title things (content type, fields, blocks, etc), English for machine names
- reuse fields as much as possible
  - 1 content type at a time
- pull js for themes using npm
- pull js for contrib module using composer
- if there's an unused module, uninstall it BUT DON'T REMOVE FROM COMPOSER

## Update local steps:
- pull dev
- create the ticket branch
- if composer updated: `composer install`
- `vendor/bin/drush cc plugin`
- `vendor/bin/drush cr`
- `vendor/bin/drush cim`
- if js updated: `npm i`, `npm run dev`
- if menu/taxonomy updated: import through structure sync

## Commit steps
- if menu/taxonomy updated: export through structure sync
- `vendor/bin/drush cex`
- commit ONLY THE NECESSARY FILES
- push
- create merge request on gitlab
- if merge conflict: do update local, resolve the conflict
- if menu/taxonomy updated: import through structure sync on DEV

> Don't update the branch with dev until you commit the changes. Otherwise, any changes from dev will be lost.

> Double check the changes before commit. make sure to commit only necessary files.
