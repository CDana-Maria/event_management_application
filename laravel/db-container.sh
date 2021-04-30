 docker run --name mb_projects_laravel -d \
            -p 33102:3306 \
	    -e MYSQL_ROOT_PASSWORD=test \
            --restart unless-stopped \
	    --volume /home/dana-maria/bootcampDev/www/event_management/laravel/docker-containers/db:/var/www/html \
            --network=laravel_network \
           mariadb:10.1.48-bionic \
