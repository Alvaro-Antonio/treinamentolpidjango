from django.http import HttpResponse
from django.contrib.auth.decorators import login_required

@login_required
def hello(request):
    return HttpResponse('<h1>Olá Mundo</h1>')
