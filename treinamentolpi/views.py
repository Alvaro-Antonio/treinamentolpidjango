from django.http import HttpResponse
from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required
from django.contrib.auth.forms import UserCreationForm

@login_required
def hello(request):
    return HttpResponse('<h1>Olá Mundo</h1>')

