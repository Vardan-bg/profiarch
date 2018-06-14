import { Get, Controller, Header } from '@nestjs/common';
import { AppService } from './app.service';
@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  @Header('Cache-Control', 'text/plain')
  @Get()
  root(): string {
    return this.appService.root();
  }
}
