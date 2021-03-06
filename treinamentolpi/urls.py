"""treinamentolpi URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from home.views import home
from .views import hello
from django.contrib.auth import views as auth_views
from django.contrib import admin
from django.urls import path, include
from sugestaoSimulado import urls as urls_sugesSimu
from sugestaoSimulado.views import sugestaoSimulados
from contas import urls as urls_contas


urlpatterns = [
    path('', home, name="home"),
    path('sugestaoSimulado/', sugestaoSimulados, name="sugestaoS"),
    path('login/', auth_views.LoginView.as_view(), name="login"),
    path('logout/', auth_views.LogoutView.as_view(), name='logout'),
    path ('cadastro/', include(urls_contas)),
    path('admin/', admin.site.urls),
    path('hello', hello),

]

