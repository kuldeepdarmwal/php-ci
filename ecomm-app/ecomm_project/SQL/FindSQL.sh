cd migrate/
if (find | grep *.sql)
then
		echo "SQL script is exist";
		#mysql -uroot -proot #< ecommsql.sql
		mysql -uroot -proot < add_column.sql
		          
	        echo "done";
else 
		echo "SQL script does not exists";
	fi
