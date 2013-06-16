api = 2
core = 7.x

; Drupal
projects[drupal][version] = 7.22

; KMT
projects[kmt_base][subdir] = "features"
projects[kmt_base][type] = "module"
projects[kmt_base][download][type] = "git"
projects[kmt_base][download][url] = "git://github.com/Bussmeyer/kmt_base.git"

projects[kmt_development][subdir] = "features"
projects[kmt_development][type] = "module"
projects[kmt_development][download][type] = "git"
projects[kmt_development][download][url] = "git://github.com/Bussmeyer/kmt_development.git"

projects[kmt_security][subdir] = "features"
projects[kmt_security][type] = "module"
projects[kmt_security][download][type] = "git"
projects[kmt_security][download][url] = "git://github.com/Bussmeyer/kmt_security.git"
