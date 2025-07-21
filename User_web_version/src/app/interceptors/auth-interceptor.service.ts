import { Injectable } from '@angular/core';
import { HttpEvent, HttpInterceptor, HttpHandler, HttpRequest } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()
export class AuthInterceptorService implements HttpInterceptor {

  intercept(req: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    // Add your authorization token or headers here
    const clonedRequest = req.clone({
      setHeaders: {
        Authorization: 'Bearer your-token-here'
      }
    });
    return next.handle(clonedRequest);
  }
}
