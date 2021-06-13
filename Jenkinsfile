pipeline{
    agent any
    stages{
        stage('build'){
            steps{
                sh '''
                    ls
                    composer install
                '''
            }
        }   
        stage('Test'){
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
                '''
            }
        }
        stage('Analyse Sonar'){
            steps{
                sh '''
                    echo "Test Static(SonarQube)"
                        /opt/sonar-scanner-4.6.0.2311-linux/bin/sonar-scanner
                '''
            }
        }
        stage('Prepare package'){
            steps{
                sh '''
                    zip -r lastInf.zip ./
                '''
            }
        }
        stage('deploy'){
            steps{
                sh 'scp ./lastInf.zip abdo@20.98.160.69:/opt/package'
                sh '''ssh abdo@20.98.160.69 -p 22 "
                echo 'cd'
                cd /opt/package
                echo 'unzip'
                unzip -o lastInf.zip
                rm -rf lastInf.zip
                cp -rf /opt/package/* /var/www/lastInfl
                hostname
                "
                hostname
                '''
            }
        }
    }
}
