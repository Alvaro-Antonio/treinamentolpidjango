from django.urls import path
from .views import sugestaoSimulado

urlpatterns = [
    path('sugestaoSimulado', sugestaoSimulado),
   

]