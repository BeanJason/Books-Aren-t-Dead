int x = 30;

pthread_mutex_t lock;

void* increase(void *arg) {
    pthread_mutex_lock(&lock);
    x += 50;
    pthread_mutex_unlock(&lock);
    printf("%d\n", x); //A [                                         ] 
}

int main() { 
    pid_t pid; 
    pthread_t t1, t2;
    
    int y = 40;
    
    pid = fork(); 
    
    if (pid == 0) {                        
        x *= 3;
        y *= 3;
         
        pthread_create(&t1, NULL, increase, NULL);
        pthread_create(&t2, NULL, increase, NULL);
        pthread_join(t1, NULL);     
        pthread_join(t2, NULL);     
        return 0; 
        
    } else {                                      
        x /= 2; 
        y /= 2;
                 
        pthread_create(&t1, NULL, increase, NULL);
        pthread_create(&t2, NULL, increase, NULL);
        pthread_join(t1, NULL);     
        pthread_join(t2, NULL);     
        return 0; 
    } 
} 