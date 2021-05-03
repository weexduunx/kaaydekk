<?php
	
	namespace App\Controller;
	
	use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
	use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\JsonResponse;
	use Symfony\Component\HttpFoundation\RedirectResponse;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	
	class GoogleController extends AbstractController
	{
		/**
         *
		 * Link to this controller to start the "connect" process
		 *
		 * @Route("/connect/google", name="connect_google")
		 * @param ClientRegistry $clientRegistry
		 * @return RedirectResponse
		 */
		public function connectAction(ClientRegistry $clientRegistry)
		{
			// on Symfony 3.3 or lower, $clientRegistry = $this->get('knpu.oauth2.registry');
			
			// will redirect to Facebook!
			return $clientRegistry
				->getClient('google') // key used in config/packages/knpu_oauth2_client.yaml
				->redirect();
		}
		
		/**
		 * After going to Facebook, you're redirected back here
		 * because this is the "redirect_route" you configured
		 * in config/packages/knpu_oauth2_client.yaml
		 *
		 * @Route("/connect/google/check", name="connect_google_check")
		 * @param Request $request
		 * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function connectCheckAction(Request $request)
		{
			if (!$this->getUser())
			{
				return new JsonResponse(array('status'=>false, 'message'=>"cet utilisateur n'existe pas"));
			}
			else{
				return  $this->redirectToRoute('admin');
			}
		}
	}