import time
from locust import HttpUser, task, between

class QuickstartUser(HttpUser):
    wait_time = between(1, 2.5)

    #@task
    #def hello_world(self):
        #url='/ctrl/operation.php'
        #params = {'exp':1+2*3+5/4}
        #r=self.client.post{url=url,params=params}
        #self.fun(r)

    @task
    def req_index(self):
        data = {
            "exp": "1+2*3+5/4",
        }
        login_response = self.client.post('/ctrl/operation.php', data=data)


