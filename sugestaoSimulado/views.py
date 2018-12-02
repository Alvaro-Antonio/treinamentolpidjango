from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required

from sugestaoSimulado.forms import sugestaoSimuladoForm
from sugestaoSimulado.models import sugestaoSimulado

@login_required
def sugestaoSimulados(request):
    formSS = sugestaoSimuladoForm(request.POST or None, request.FILES or None)

    if formSS.is_valid():
        formSS.save()
        return redirect('sugestaoS')
    return render(request, 'sugestaoSimulado.html', {'formSS': formSS})