from rest_framework import viewsets, generics

from .serializers import OfferSerializer
from .models import Offer


class OfferViewSet(viewsets.ModelViewSet):
    queryset = Offer.objects.all().order_by('Name')
    serializer_class = OfferSerializer
    
class OfferIdView(generics.ListAPIView):
    serializer_class = OfferSerializer

    def get_queryset(self):
        """
        This view should return a list of all the purchases for
        the user as determined by the username portion of the URL.
        """
        offer = self.kwargs['id']
        return Offer.objects.filter(id=offer)