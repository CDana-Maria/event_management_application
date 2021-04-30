sudo docker run --name it-academy-project_laravel -d \
    -p 89:80 \
    -p 8823:22 \
    --restart unless-stopped \
    --volume /home/dana-maria/bootcampDev/www/event_management/laravel:/var/www/html \
   --network=laravel_network \
    amoraresco/it-academy-project:latest \
