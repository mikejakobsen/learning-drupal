
![alt tag](http://www.mikejakobsen.com/mike.png)

# Drupal 7.5.1

As Roma fan club school project using Drupal 7.5.2



* [Todo](todo.md)
* [Report](Report.md)
* [Requirements(PDF)](assets/D.E.MandatoryAssignment2DrupalandCMScomparisons.pdf)

###Compile Scss

Within the theme directory
```
compass watch sass/style.scss
```

### Migration Scripts

**Commands:**


```bash

	function migratedrupal(){
		cd && cd ~/Code/drupal/ && drush sql-dump > sql-dump.sql &&
		mysql --host=mysql39.unoeuro.com --user=husk_det_nu --password=secret husk_det_nu_db < ~/Code/Drupal/sql-dump.sql
	}

	function uploaddrupal(){
		cd && cd ~/Code/drupal
		ncftpput -R -v -u "bryrupfodboldsko.dk" -p "secret" ftp.bryrupfodboldskole.dk /mike/ ~/Code/drupal
	}

	alias umbracodb="mysql --host=mysql39.unoeuro.com --user=husk_det_nu --password=secret husk_det_nu_db"

```
