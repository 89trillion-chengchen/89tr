import time
from locust import HttpUser, task, between

class QuickstartUser(HttpUser):
    wait_time = between(1, 2.5)

    @task
    def req_index(self):
        data = {
            "operation": "1+2*3+5/4",
        }
        login_response = self.client.post('/Operation/operation', data=data)


