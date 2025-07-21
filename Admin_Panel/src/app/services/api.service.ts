import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  baseUrl = environment.baseUrl;
  imageUrl = environment.imageUrl;

  constructor(private http: HttpClient) {
    console.log("URL = ", this.baseUrl);
  }

  public postTemp(url: string, body: any, temp: any): Promise<any> {
    return new Promise((resolve, reject) => {
      const header = {
        headers: new HttpHeaders()
          .set('Content-Type', 'application/json')
          .set('Authorization', `Bearer ${localStorage.getItem('token')}`)
      };
      this.http.post(this.baseUrl + url, body, header).subscribe(
        (res) => resolve(res),
        (error) => reject(error)
      );
    });
  }

  public getLocalAssets(file: string): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http.get(`/assets/${file}`).subscribe(
        (res) => resolve(res),
        (error) => reject(error)
      );
    });
  }

  uploadFile(files: File[]) {
    var formData = new FormData();
    Array.from(files).forEach(f => formData.append('image', f));
    return this.http.post(this.baseUrl + 'v1/' + 'uploadImage', formData);
  }

  public get_public(url: any) {
    return new Promise((resolve, reject) => {
      this.http.get(this.baseUrl + url).subscribe(
        (res) => resolve(res),
        (error) => {
          console.log(error);
          reject(error);
        }
      );
    });
  }

  public get_private(url: any): Promise<any> {
    return new Promise<any>((resolve, reject) => {
      const header = {
        headers: new HttpHeaders()
          .set('Content-Type', 'application/x-www-form-urlencoded')
          .set('Authorization', `Bearer ${localStorage.getItem('token')}`)
      };
      this.http.get(this.baseUrl + url, header).subscribe(
        (data) => resolve(data),
        (error) => reject(error)
      );
    });
  }

  public post(url: any, body: any) {
    return new Promise((resolve, reject) => {
      const header = {
        headers: new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded')
      };
      const param = this.JSON_to_URLEncoded(body);
      this.http.post(this.baseUrl + url, param, header).subscribe(
        (res) => resolve(res),
        (error) => {
          console.log(error);
          reject(error);
        }
      );
    });
  }

  public post_private(url: string, body: any): Promise<any> {
    return new Promise<any>((resolve, reject) => {
      const header = {
        headers: new HttpHeaders()
          .set('Content-Type', 'application/x-www-form-urlencoded')
          .set('Authorization', `Bearer ${localStorage.getItem('token')}`)
      };
      const param = this.JSON_to_URLEncoded(body);
      this.http.post(this.baseUrl + url, param, header).subscribe(
        (data) => resolve(data),
        (error) => reject(error)
      );
    });
  }

  JSON_to_URLEncoded(element: any, key?: string, list?: string[]) {
    let new_list = list || [];
    if (typeof element == 'object') {
      for (let idx in element) {
        this.JSON_to_URLEncoded(
          element[idx],
          key ? key + '[' + idx + ']' : idx,
          new_list
        );
      }
    } else {
      new_list.push(key + '=' + encodeURIComponent(element));
    }
    return new_list.join('&');
  }
}
