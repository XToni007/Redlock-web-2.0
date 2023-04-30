FROM mysql:latest

# Set the root password
ENV MYSQL_ROOT_PASSWORD password
COPY redlock-db.sql /docker-entrypoint-initdb.d/

# Expose port 3306
EXPOSE 3306
