from django.forms import ModelForm
from .models import sugestaoSimulado

class sugestaoSimuladoForm(ModelForm):
    class Meta:
        model = sugestaoSimulado
        fields = ['pergunta', 'respostaCerta', 'respostaErrada1', 'respostaErrada2', 'respostaErrada3', 'respostaErrada4']
