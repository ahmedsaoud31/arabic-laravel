# arabic-laravel
Arabic package for laravel, arabic date, cut arabic string, arabic numer and since arabic format


## Installation

### With Composer

```
$ composer require ahmedsaoud31/arabic-laravel dev-master
```

or

```json
{
    "require": {
        "ahmedsaoud31/arabic-laravel": "dev-master"
    }
}
```
##### run command "composer update" in your project root 

#Use
###Ex1:
		use Arabic\Arabic;
		...
		$arabicText = 'إضافة اللغة العربية لإطار العمل لارافيل';
		$len = 40;
		echo Arabic::cut($arabicText, $len);

###outbuts

  إضافة اللغة العربية...

###Ex2:
##### first argument format and scound argument the time in timesstamps or strtotime php functions input format
##### if scound argument not set, now server time will be use 
	
	echo Arabic::adate('w j من F Y g:i A');
	
###outbuts

  ٠ ١ من فبراير ٢٠١٥ ١:٠١ مساءاً

###Ex3:

         echo Arabic::num('12.09');

###outbuts

  ١٢٫٠٩

###Ex4:
##### time format in timesstamps or strtotime php functions input format
	echo 'منذ '.Arabic::since('1-1-2015');
	
###outbuts

  منذ ثوان
  
  منذ 32 دقيقة
  
  منذ ساعة و 20 دقيقة
  
  منذ 10 ساعات و 10 دقائق
  
  منذ يوم و 15 دقيقة
  
  منذ يوم و ساعة
  
  منذ يوم و  12 ساعة
  
  منذ إسبوع و ثوان
  
  منذ إسبوع و ساعة
  
  منذ إسبوع و  5 أيام
  
  منذ شهر و  يوم
  
  منذ شهر و إسبوع
  
  منذ شهر و إسبوعان
  
  منذ 10 أشهر و 6 أيام
  
  منذ عام و إسبوع
  
  منذ عام و شهر
  
  منذ 3 أعوام و 5 أشهر
