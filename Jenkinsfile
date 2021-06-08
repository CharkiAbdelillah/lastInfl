pipeline{
    agent any
    stages{
        stage('build'){
            steps{
                sh 'echo "hello word"'
                sh '''
                    echo "before the execute"
                    ls -la
                    whoami
                    hostname
                    cd /var/www
                    ls
                '''
            }
        }
        // stage('test'){
        //     steps{
        //         sh '''
        //             echo "ls"
                    
        //             ls
        //             cd /var/www/app3/
        //             chmod -R 777 .
        //             ls
        //             echo "Test unitaire"
        //                 ./vendor/bin/phpunit --filter testHomePage
        //             echo "Test fonctionnel"
        //                 php artisan test --filter testStoreInfluenceur
        //             echo "Test integration"
        //                 php artisan test --filter testSaveInfluenceur
                        

        //             cd /laravel
        //             php hello.php
        //         '''
        //     }
        // }
        stage('run'){
            steps{
                sh '''
                    echo "runing comming"
		    echo "ls"
		    ls
		    cd /var/www/app3/laravel
                    php hello.php
                '''
            }
        }
        stage('deploy'){
            steps{
                sh '''ssh abdo@20.98.160.69 -p 22 "
                git pull origin main
                hostname
                ls
                cd /var/www
                ls
                "
                hostname
                '''
            }
        }
    }
}
