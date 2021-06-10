pipeline{
    agent any
    stages{
        stage('build'){
            steps{
                sh 'echo "hello word"'
                sh '''
                    ls
                    composer install 
                '''
            }
        }
        /*stage('test'){
            steps{
                sh '''
                    echo "ls"
                    
                    ls
                    cd /var/www/app3/
                    ls
                    echo "Test unitaire"
                        ./vendor/bin/phpunit --filter testHomePage
                    echo "Test fonctionnel"
                        php artisan test --filter testStoreInfluenceur
                    echo "Test integration"
                        ./vendor/bin/phpunit --filter testSaveInfluenceur
                    echo "Test Static(SonarQube)"
                        /opt/sonar-scanner-4.6.0.2311-linux/bin/sonar-scanner
                '''
            }
        }*/
        stage('Prepare package'){
            steps{
                sh '''
                    tar -cvf lastInf1.tar ./
                '''
            }
        }
        stage('deploy'){
            steps{
                /*sh 'scp -rv ./lastInf1.tar abdo@20.98.160.69:/opt/package'*/
                // sh 'scp ./lastInf1.tar abdo@20.98.160.69:/opt/package'
                sh '''ssh abdo@20.98.160.69 -p 22 "
                cd /opt/package
                tar -xvf lastInf1.tar
                rm -rf lastInf1.tar
                cp -rf /opt/package/* /var/www/lastInfl
                "
                hostname
                '''
            }
        }
    }
}
