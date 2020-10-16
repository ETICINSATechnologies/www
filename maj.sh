sudo docker build . -t www.etic-insa.com
sudo docker stop www
sudo docker container prune -f
sudo docker run -d --restart always --name www -p 80:80 www.etic-insa.com

